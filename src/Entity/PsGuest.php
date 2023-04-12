<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsGuest
 *
 * @ORM\Table(name="ps_guest", indexes={@ORM\Index(name="id_web_browser", columns={"id_web_browser"}), @ORM\Index(name="id_operating_system", columns={"id_operating_system"}), @ORM\Index(name="id_customer", columns={"id_customer"})})
 * @ORM\Entity
 */
class PsGuest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGuest;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_operating_system", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idOperatingSystem;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_web_browser", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idWebBrowser;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="javascript", type="boolean", nullable=true)
     */
    private $javascript = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="screen_resolution_x", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $screenResolutionX;
    /**
     * @var int|null
     *
     * @ORM\Column(name="screen_resolution_y", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $screenResolutionY;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="screen_color", type="boolean", nullable=true)
     */
    private $screenColor;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="sun_java", type="boolean", nullable=true)
     */
    private $sunJava;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="adobe_flash", type="boolean", nullable=true)
     */
    private $adobeFlash;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="adobe_director", type="boolean", nullable=true)
     */
    private $adobeDirector;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="apple_quicktime", type="boolean", nullable=true)
     */
    private $appleQuicktime;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="real_player", type="boolean", nullable=true)
     */
    private $realPlayer;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="windows_media", type="boolean", nullable=true)
     */
    private $windowsMedia;
    /**
     * @var string|null
     *
     * @ORM\Column(name="accept_language", type="string", length=8, nullable=true)
     */
    private $acceptLanguage;
    /**
     * @var bool
     *
     * @ORM\Column(name="mobile_theme", type="boolean", nullable=false)
     */
    private $mobileTheme = '0';
}
