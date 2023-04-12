<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredFilterBlock
 *
 * @ORM\Table(name="ps_layered_filter_block")
 * @ORM\Entity
 */
class PsLayeredFilterBlock
{
    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hash = '';
    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=16777215, nullable=true)
     */
    private $data;
}
