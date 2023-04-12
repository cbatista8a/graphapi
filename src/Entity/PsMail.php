<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsMail
 *
 * @ORM\Table(name="ps_mail", indexes={@ORM\Index(name="recipient", columns={"recipient"})})
 * @ORM\Entity
 */
class PsMail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMail;
    /**
     * @var string
     *
     * @ORM\Column(name="recipient", type="string", length=126, nullable=false)
     */
    private $recipient;
    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=62, nullable=false)
     */
    private $template;
    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=254, nullable=false)
     */
    private $subject;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd = 'CURRENT_TIMESTAMP';
}
