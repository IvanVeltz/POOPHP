<?php

    class Personne{

        private $_nom;
        private $_prenom;
        private $_dateDeNaissance;

        public function __construct($nom, $prenom, $dateDeNaissance){
            $this-> _nom = $nom;
            $this-> _prenom = $prenom;
            $this-> _dateDeNaissance = $dateDeNaissance;
        }

        // Fonction qui calcule l'age d'une personne
        public function age(){
            $aujourdhui = date("Y-m-d");
            // Recupere la date du jour au format souhaité
            $age = date_diff(date_create($this -> _dateDeNaissance), date_create($aujourdhui));
            // date_create permet de créer une instance de la classe DateTime
            // date_diff calcul la différence entre les deux date
            return $age->format('%y');
            // retourne la date en gardant uniquement l'année
        }

        public function afficherInformations(){
            echo "$this->_prenom $this->_nom a ".$this->age()." ans<br>";
        }
    }

    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
    $p1->afficherInformations();
    $p2->afficherInformations();