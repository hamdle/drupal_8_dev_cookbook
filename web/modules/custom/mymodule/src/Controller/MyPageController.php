<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for my module module.
 */
class MyPageController extends ControllerBase {
	/**
	 * Returns markup for our custom page.
	 */
	public function customPage() {
		return [
			'#markup' => t('Hello Drupal 8 world!'),
		];
	}
}