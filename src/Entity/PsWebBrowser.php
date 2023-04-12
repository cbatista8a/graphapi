<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsWebBrowser
 *
 * @ORM\Table(name="ps_web_browser")
 * @ORM\Entity
 */
class PsWebBrowser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_web_browser", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebBrowser;
    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;
}
