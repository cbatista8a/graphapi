<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * Graphapi
 *
 * @ORM\Table(name="graphapi")
 * @ORM\Entity
 */
class Graphapi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="module_name", type="string", length=50, nullable=false)
     */
    private $moduleName;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd = 'CURRENT_TIMESTAMP';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateUpd = 'CURRENT_TIMESTAMP';
}
