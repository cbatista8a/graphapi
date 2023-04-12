<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCountry
 *
 * @ORM\Table(name="ps_country", indexes={@ORM\Index(name="country_", columns={"id_zone"}), @ORM\Index(name="country_iso_code", columns={"iso_code"})})
 * @ORM\Entity
 */
class PsCountry
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_country;
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsZone", inversedBy="idZone")
     */
    private $id_zone;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $id_currency = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=3, nullable=false)
     */
    private $iso_code;
    /**
     * @var int
     *
     * @ORM\Column(name="call_prefix", type="integer", nullable=false)
     */
    private $call_prefix = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="contains_states", type="boolean", nullable=false)
     */
    private $contains_states = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="need_identification_number", type="boolean", nullable=false)
     */
    private $need_identification_number = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="need_zip_code", type="boolean", nullable=false, options={"default"="1"})
     */
    private $need_zip_code = \true;
    /**
     * @var string
     *
     * @ORM\Column(name="zip_code_format", type="string", length=12, nullable=false)
     */
    private $zip_code_format = '';
    /**
     * @var bool
     *
     * @ORM\Column(name="display_tax_label", type="boolean", nullable=false)
     */
    private $display_tax_label;
}
