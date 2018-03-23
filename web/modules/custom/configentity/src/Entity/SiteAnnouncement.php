<?php

namespace Drupal\configentity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

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