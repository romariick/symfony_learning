<?php

namespace REFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ref
 *
 * @ORM\Table(name="ref")
 * @ORM\Entity(repositoryClass="REFBundle\Repository\RefRepository")
 */
class Ref
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;


     /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="uat", type="text", nullable=true)
     */
    private $uat;

    /**
     * @var string
     *
     * @ORM\Column(name="po", type="string", length=255, nullable=true)
     */
    private $po;

    /**
     * @var string
     *
     * @ORM\Column(name="dev", type="string", length=255, nullable=true)
     */
    private $dev;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;
    
      /**
     * @var string
     *
     * @ORM\Column(name="team", type="string", length=255, nullable=true)
     */
    private $team  = 'IDP';


    /**
     * Get  id
     *
     * @return int
     */
    public function  getId()
    {
     
        return   $this->id;
    }

    /**
     * Set team
     *
     * @param string $team
     *
     * @return Ref
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Ref
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

     /**
     * Set title
     *
     * @param string $title
     *
     * @return Ref
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set uat
     *
     * @param string $uat
     *
     * @return Ref
     */
    public function setUat($uat)
    {
        $this->uat = $uat;

        return $this;
    }

    /**
     * Get uat
     *
     * @return string
     */
    public function getUat()
    {
        return $this->uat;
    }

    /**
     * Set po
     *
     * @param string $po
     *
     * @return Ref
     */
    public function setPo($po)
    {
        $this->po = $po;

        return $this;
    }

    /**
     * Get po
     *
     * @return string
     */
    public function getPo()
    {
        return $this->po;
    }

    /**
     * Set dev
     *
     * @param string $dev
     *
     * @return Ref
     */
    public function setDev($dev)
    {
        $this->dev = $dev;

        return $this;
    }

    /**
     * Get dev
     *
     * @return string
     */
    public function getDev()
    {
        return $this->dev;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Ref
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Ref
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Ref
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

