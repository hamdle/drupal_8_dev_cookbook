<?php

namespace Drupal\angularmodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block for AngularJS example.
 *
 * @Block(
 *   id = "angularmodule_agular_block",
 *   admin_label = @Translation("AngularJS Block")
 * )
 */
class AngularBlock extends BlockBase {
	public function build() {
		return [
			'input' => [
				'#type' => 'textfield',
				'#title' => $this->t('Name'),
				'#placeholder' => $this->t('Enter a name here'),
				'#attributes' => [
					'ng-model' => 'yourName',
				],
			],
			'name' => [
				'#markup' => '<hr><h1>Hello {{yourName}}</h1>',
			],
			'#attached' => [
				'library' => [
					'angularmodule/angular',
				],
			],
		];
	}
}

