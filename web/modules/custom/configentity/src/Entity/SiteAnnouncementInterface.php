<?php

namespace Drupal\configentity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

interface SiteAnnouncementInterface extends ConfigEntityInterface
{
    /**
     * Gets the message value.
     *
     * @return string
     */
    public function getMessage();
}