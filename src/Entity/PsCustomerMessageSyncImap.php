<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomerMessageSyncImap
 *
 * @ORM\Table(name="ps_customer_message_sync_imap", indexes={@ORM\Index(name="md5_header_index", columns={"md5_header"})})
 * @ORM\Entity
 */
class PsCustomerMessageSyncImap
{
    /**
     * @var binary
     *
     * @ORM\Column(name="md5_header", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $md5Header;
}
