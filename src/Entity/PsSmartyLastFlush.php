<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsSmartyLastFlush
 *
 * @ORM\Table(name="ps_smarty_last_flush")
 * @ORM\Entity
 */
class PsSmartyLastFlush
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_flush", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $lastFlush = '0000-00-00 00:00:00';
}
