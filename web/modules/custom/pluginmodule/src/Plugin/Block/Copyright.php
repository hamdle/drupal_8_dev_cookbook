<?php

namespace Drupal\pluginmodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *  id = "copyright_block",
 *  admin_label = @Translation("Copyright"),
 *  category = @Translation("Custom")
 * )
 */
class Copyright extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        $date = new \DateTime();
        return [
          '#markup' => t('Timestamp @year', [
              '@year' => $date->getTimestamp(),
          ]),
        ];
    }
}