<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsAttachment
 *
 * @ORM\Table(name="ps_attachment")
 * @ORM\Entity
 */
class PsAttachment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attachment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttachment;
    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=40, nullable=false)
     */
    private $file;
    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=128, nullable=false)
     */
    private $fileName;
    /**
     * @var int
     *
     * @ORM\Column(name="file_size", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $fileSize = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="mime", type="string", length=128, nullable=false)
     */
    private $mime;
}
