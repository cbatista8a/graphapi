<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomerThread
 *
 * @ORM\Table(name="ps_customer_thread", indexes={@ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="id_contact", columns={"id_contact"}), @ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_lang", columns={"id_lang"}), @ORM\Index(name="id_order", columns={"id_order"}), @ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsCustomerThread
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_thread", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerThread;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idContact;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_product", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="open"})
     */
    private $status = 'open';
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=12, nullable=true)
     */
    private $token;
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
