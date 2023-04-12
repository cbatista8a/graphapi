<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSmartyLazyCache
 *
 * @ORM\Table(name="ps_smarty_lazy_cache")
 * @ORM\Entity
 */
class PsSmartyLazyCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="template_hash", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $templateHash = '';
    /**
     * @var string
     *
     * @ORM\Column(name="cache_id", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cacheId = '';
    /**
     * @var string
     *
     * @ORM\Column(name="compile_id", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $compileId = '';
    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath = '';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $lastUpdate = '0000-00-00 00:00:00';
}
