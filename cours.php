<?php

    class Ordinateur {

        private $_marque;
        private $_modele;
        private $_ecran;
        private $_statut = 0;
        private $_cpuClock;
        private $_hdd;

        private static $_nbPostes = 0;

        const HDD_SMALL = "250Go";
        const HDD_MEDIUM = "500Go";
        const HDD_BIG = "1To";

        public function __construct($data){
            $this->_marque = $data[0];
            $this->_cpuClock = $data[1];
            self::$_nbPostes++;//Le compteur est incrementé
        }

        public function getMarque(){
            return $this -> _marque;
        }

        public function getCpuClock(){
            return $this->_cpuClock;
        }

        public function setCpuClock($speed){
            $this->_cpuClock = $speed;
        }

        public function getHdd (){
            return $this->_hdd;
        }

        public function setHdd($capacite){
            // On vérifie qu'on nous donne bien une des trois capacités prédéfinies plus haut.
            if (in_array($capacite, [self::HDD_SMALL, self::HDD_MEDIUM, self::HDD_BIG])){
                $this->_hdd = $capacite;
            }
        }

        public static function combien(){
            echo self::$_nbPostes."<br>";
        }

        public function allumer(){
            $this -> _statut = 1;
        }


    }

    $poste = new Ordinateur(array("Samsung", 2.4));
    $poste2 = new Ordinateur(array("Hitachi", 1.6));
    $poste->allumer();
    $poste->setCpuClock(3);
    $poste->setHdd(Ordinateur::HDD_SMALL);
    var_dump($poste);
    Ordinateur::combien();


