<?php

namespace OC\PlatformBundle\Entity;

class Utilisateur {

    private $nom;
    private $prenom;
    
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public function addSubscriber(){
        return 10 + 10;
    }
}
