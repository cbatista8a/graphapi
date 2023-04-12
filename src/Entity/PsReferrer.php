<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsReferrer
 *
 * @ORM\Table(name="ps_referrer")
 * @ORM\Entity
 */
class PsReferrer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_referrer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReferrer;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true)
     */
    private $passwd;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_regexp", type="string", length=64, nullable=true)
     */
    private $httpRefererRegexp;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_like", type="string", length=64, nullable=true)
     */
    private $httpRefererLike;
    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_regexp", type="string", length=64, nullable=true)
     */
    private $requestUriRegexp;
    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_like", type="string", length=64, nullable=true)
     */
    private $requestUriLike;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_regexp_not", type="string", length=64, nullable=true)
     */
    private $httpRefererRegexpNot;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_like_not", type="string", length=64, nullable=true)
     */
    private $httpRefererLikeNot;
    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_regexp_not", type="string", length=64, nullable=true)
     */
    private $requestUriRegexpNot;
    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_like_not", type="string", length=64, nullable=true)
     */
    private $requestUriLikeNot;
    /**
     * @var string
     *
     * @ORM\Column(name="base_fee", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $baseFee = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="percent_fee", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentFee = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="click_fee", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $clickFee = '0.00';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
