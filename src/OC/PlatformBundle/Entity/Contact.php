<?php

namespace OC\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use OC\PlatformBundle\Validator\Antiflood;

class Contact
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     * @Antiflood()
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $prenom;

    /**
     * @var \DateTime
     */
    private $datenaissance;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance.
     *
     * @param \DateTime $datenaissance
     *
     * @return Contact
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance.
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * @Assert\Callback
     */
    public function isContextValid(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {
        $context
            ->buildViolation('Enregister impossible')
            ->atPath('content')
            ->addViolation();
    }
}
