<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsWebserviceAccount
 *
 * @ORM\Table(name="ps_webservice_account", indexes={@ORM\Index(name="key", columns={"key"})})
 * @ORM\Entity
 */
class PsWebserviceAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_account", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebserviceAccount;
    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=32, nullable=false)
     */
    private $key;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="class_name", type="string", length=50, nullable=false, options={"default"="WebserviceRequest"})
     */
    private $className = 'WebserviceRequest';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean", nullable=false)
     */
    private $isModule = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=50, nullable=true)
     */
    private $moduleName;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
}
