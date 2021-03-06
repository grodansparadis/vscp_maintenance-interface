<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * VSCPType
 *
 * @ORM\Table(name="vscpmaint_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VSCPTypeRepository")
 * @UniqueEntity(fields={"vscptype", "vscptypeclass"}, message="Such type/class combination already exists.")
 */
class VSCPType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="vscptype", type="integer")
     */
    private $vscptype;

    /**
     * @var string
     *
     * @ORM\Column(name="vscptype_name", type="string", length=255)
     */
    private $vscptypeName;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\VSCPClass", cascade={"persist"})
    */
    private $vscptypeclass;

    /**
     * @var string
     *
     * @ORM\Column(name="vscptype_description", type="text")
     */
    private $vscptypeDescription;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vscptype
     *
     * @param integer $vscptype
     *
     * @return VSCPType
     */
    public function setVscptype($vscptype)
    {
        $this->vscptype = $vscptype;

        return $this;
    }

    /**
     * Get vscptype
     *
     * @return int
     */
    public function getVscptype()
    {
        return $this->vscptype;
    }


    /**
     * Set vscptypeDescription
     *
     * @param string $vscptypeDescription
     *
     * @return VSCPType
     */
    public function setVscptypeDescription($vscptypeDescription)
    {
        $this->vscptypeDescription = $vscptypeDescription;

        return $this;
    }

    /**
     * Get vscptypeDescription
     *
     * @return string
     */
    public function getVscptypeDescription()
    {
        return $this->vscptypeDescription;
    }

    /**
     * Set vscptypeclass
     *
     * @param \AppBundle\Entity\VSCPClass $vscptypeclass
     *
     * @return VSCPType
     */
    public function setVscptypeclass(\AppBundle\Entity\VSCPClass $vscptypeclass = null)
    {
        $this->vscptypeclass = $vscptypeclass;

        return $this;
    }

    /**
     * Get vscptypeclass
     *
     * @return \AppBundle\Entity\VSCPClass
     */
    public function getVscptypeclass()
    {
        return $this->vscptypeclass;
    }

    /**
     * Set vscptypeName
     *
     * @param string $vscptypeName
     *
     * @return VSCPType
     */
    public function setVscptypeName($vscptypeName)
    {
        $this->vscptypeName = $vscptypeName;

        return $this;
    }

    /**
     * Get vscptypeName
     *
     * @return string
     */
    public function getVscptypeName()
    {
        return $this->vscptypeName;
    }


}
