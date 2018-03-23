<?php

namespace Drupal\configentity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * @ConfigEntityType(
 *   id = "announcement",
 *   label = @Translation("Site Announcement"),
 *   config_prefix = "announcement",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   }
 *   config_export = {
 *     "id",
 *     "label",
 *     "message",
 *   }
 * )
 */
class SiteAnnouncement extends ConfigEntityBase implements SiteAnnouncementInterface
{
    /**
     * The announcement's message.
     *
     * @var string
     */
    protected $message;

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return $this->message;
    }
}