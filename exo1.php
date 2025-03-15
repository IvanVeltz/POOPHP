<?php

// Creer une classe Voiture possedant 2 proprieté (marque et modeles) ainsi qu'une classe voiture elec
// qui herite (extends) de la classe voiture et qui a une propriete supp (autonomie)

    class Voiture {

        // Les propriétés sont en protected pour les classes qui en héritent
        protected $_marque;
        protected $_modele;

        // accesseurs et mutateur
        public function getMarque(){
            return $this->_marque;
        }
        public function setMarque($marque){
            $this->_marque = $marque;
        }

        public function getModele(){
            return $this->_modele;
        }
        public function setModele($modele){
            $this->_modele = $modele;
        }

        //constructeur
        public function __construct($marque, $modele){
            $this->_marque = $marque;
            $this->_modele = $modele;
        }

        //methodes
        public function getInfos(){
            return "Cette voiture est une $this->_marque de modèle $this->_modele";
        }
    }

    // creation d'uneclasse VoitureElec qui hérite de la class Voiture
    class VoitureElec extends Voiture {

        // proprietes
        private $_autonomie;

        // accesseur mutateur
        public function getAutonomie(){
            return $this->_autonomie;
        }
        public function setAutonomie($autonomie){
            $this->_autonomie = $autonomie;
        }

        //constructeur
        public function __construct($marque, $modele, $autonomie){
            parent::__construct($marque, $modele);
            $this->_autonomie = $autonomie;
        }

        //methodes
        public function getInfos(){
            return "Cette voiture est une $this->_marque de modèle $this->_modele et a une autonomie de $this->_autonomie km<br>";
        }
    }

    $v1 = new Voiture("Peugeot", "408");
    $v2 = new VoitureElec("BMW", "I3", 100);

    echo $v1->getInfos()."<br>";
    echo $v2->getInfos()."<br>";

