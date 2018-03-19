<?php

namespace Drupal\realname\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldType;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'realname' field type.
 *
 * @FieldType(
 *      id = "realname",
 *      label = @Translation("Real name"),
 *      description = @Translation("This field stores a first and last name."),
 *      category = @Translation("General"),
 *      default_widget = "string_textfield",
 *      default_formatter = "string",
 */

class RealName extends FieldItemBase {

}