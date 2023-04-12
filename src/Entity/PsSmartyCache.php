<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSmartyCache
 *
 * @ORM\Table(name="ps_smarty_cache", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="cache_id", columns={"cache_id"})})
 * @ORM\Entity
 */
class PsSmartyCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_smarty_cache", type="string", length=40, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSmartyCache;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false, options={"fixed"=true})
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_id", type="string", length=254, nullable=true)
     */
    private $cacheId;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $modified = 'CURRENT_TIMESTAMP';
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;
}
