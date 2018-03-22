<?php

namespace Drupal\realname\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * plugin implementation of the 'realname_one_line' formatter.
 *
 * @FieldFormatter(
 *   id = "realname_one_line",
 *   label = @Translation("Real name (one line)"),
 *   field_types = {
 *     "realname"
 *   }
 * )
 */
class RealNameFormatter extends FormatterBase {
    // TODO : implement field item list interface
}