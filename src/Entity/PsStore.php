<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsStore
 *
 * @ORM\Table(name="ps_store")
 * @ORM\Entity
 */
class PsStore
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_store", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStore;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_state", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idState;
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=64, nullable=false)
     */
    private $city;
    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=12, nullable=false)
     */
    private $postcode;
    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="decimal", precision=13, scale=8, nullable=true)
     */
    private $latitude;
    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="decimal", precision=13, scale=8, nullable=true)
     */
    private $longitude;
    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=16, nullable=true)
     */
    private $phone;
    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=16, nullable=true)
     */
    private $fax;
    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
}
