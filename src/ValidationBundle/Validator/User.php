<?php

namespace ValidationBundle\Validator;

use Symfony\Component\Validator\Constraints as Assert;

class User
{
    /**
     * @Assert\NotBlank(message = "author.name.not_blank")
     */
    private $firstName;
    /**
     * @Assert\NotBlank()
     */
    private $lastName;
    /**
     * @Assert\Date()
     */
    private $birthDay;

    /**
     * @ContainsAlphanumeric();
     */
    private $address;
    /**
     * @Assert\Blank()
     */
    private $bic;
    /**
     * @Assert\Iban()
     */
    private $iban;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getBirthDay()
    {
        return $this->birthDay;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getBic()
    {
        return $this->bic;
    }

    public function getIban()
    {
        return $this->iban;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @param \Symfony\Component\Validator\Context\ExecutionContextInterface $context
     * @param type                                                           $payload
     * @Assert\CallBack()
     */
    public function validate(\Symfony\Component\Validator\Context\ExecutionContextInterface $context, $payload)
    {
    }
}
