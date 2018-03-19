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

class RealName extends FieldItemBase
{

    /**
     * {@inheritdoc}
    */
    public static function schema(\Drupal\Core\Field\FieldStorageDefinitionInterface $field_definition)
    {
        return [
            'columns' => [
                'first_name' => [
                    'description' => 'First name',
                    'type' => 'varchar',
                    'length' => '255',
                    'not null' => TRUE,
                    'default' => '',
                ],
                'last_name' => [
                    'description' => 'Last name',
                    'type' => 'varchar',
                    'length' => '255',
                    'not null' => TRUE,
                    'default' => '',
                ]
            ],
            'indexes' => [
                'first_name' => ['first_name'],
                'last_name' => ['last_name'],
            ],
        ];
    }
}