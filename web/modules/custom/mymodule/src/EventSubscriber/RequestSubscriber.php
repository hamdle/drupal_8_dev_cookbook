<?php

namespace Drupal\mymodule\EventSubscriber;

use Drupal\Core\Url;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;


class RequestSubscriber implements EventSubscriberInterface {

	/**
	 * Redirects all anonymous users to the login page
	 *
	 * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event
	 * The event.
	 */
	public function doAnonRedirect(GetResponseEvent $event) {
		// Exit if event is user login
		if (\Drupal::routeMatch()->getRouteName() == 'user.login') {
			return;
		}

		// Check if user is logged in
		if (\Drupal::currentUser()->isAnonymous()) {
			// Create redirect response
			$url = Url::fromRoute('user.login')->toString();
			$redirect = new RedirectResponse($url);

			// Override default response with new redirect
			$event->setResponse($redirect);
		}
	}


	/**
	 * {@inheritdoc}
	 */
	public static function getSubscribedEvents() {
		return [
			KernelEvents::REQUEST => ['doAnonRedirect', 28],
		];
	}


}