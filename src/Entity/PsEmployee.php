<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsEmployee
 *
 * @ORM\Table(name="ps_employee", indexes={@ORM\Index(name="id_employee_passwd", columns={"id_employee", "passwd"}), @ORM\Index(name="id_profile", columns={"id_profile"}), @ORM\Index(name="employee_login", columns={"email", "passwd"})})
 * @ORM\Entity
 */
class PsEmployee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployee;
    /**
     * @var int
     *
     * @ORM\Column(name="id_profile", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProfile;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=false)
     */
    private $passwd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_passwd_gen", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastPasswdGen = 'CURRENT_TIMESTAMP';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stats_date_from", type="date", nullable=true)
     */
    private $statsDateFrom;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stats_date_to", type="date", nullable=true)
     */
    private $statsDateTo;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stats_compare_from", type="date", nullable=true)
     */
    private $statsCompareFrom;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stats_compare_to", type="date", nullable=true)
     */
    private $statsCompareTo;
    /**
     * @var int
     *
     * @ORM\Column(name="stats_compare_option", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $statsCompareOption = '1';
    /**
     * @var string|null
     *
     * @ORM\Column(name="preselect_date_range", type="string", length=32, nullable=true)
     */
    private $preselectDateRange;
    /**
     * @var string|null
     *
     * @ORM\Column(name="bo_color", type="string", length=32, nullable=true)
     */
    private $boColor;
    /**
     * @var string|null
     *
     * @ORM\Column(name="bo_theme", type="string", length=32, nullable=true)
     */
    private $boTheme;
    /**
     * @var string|null
     *
     * @ORM\Column(name="bo_css", type="string", length=64, nullable=true)
     */
    private $boCss;
    /**
     * @var int
     *
     * @ORM\Column(name="default_tab", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $defaultTab = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="bo_width", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $boWidth = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="bo_menu", type="boolean", nullable=false, options={"default"="1"})
     */
    private $boMenu = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool|null
     *
     * @ORM\Column(name="optin", type="boolean", nullable=true)
     */
    private $optin;
    /**
     * @var int
     *
     * @ORM\Column(name="id_last_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLastOrder = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_last_customer_message", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLastCustomerMessage = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_last_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLastCustomer = '0';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_connection_date", type="date", nullable=true)
     */
    private $lastConnectionDate;
    /**
     * @var string|null
     *
     * @ORM\Column(name="reset_password_token", type="string", length=40, nullable=true)
     */
    private $resetPasswordToken;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reset_password_validity", type="datetime", nullable=true)
     */
    private $resetPasswordValidity;
    /**
     * @var bool
     *
     * @ORM\Column(name="has_enabled_gravatar", type="boolean", nullable=false)
     */
    private $hasEnabledGravatar = '0';
}
