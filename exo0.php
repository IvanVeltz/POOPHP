<?php

    class Personne{

        private $_nom;
        private $_prenom;
        private $_dateDeNaissance;

        public function getNom(){
            return $this-> _nom;
        }

        public function setNom($nom){
            $this-> _nom = $nom;
        }

        public function getPrenom(){
            return $this-> _prenom;
        }

        public function setPrenom($prenom){
            $this-> _prenom = $prenom;
        }

        public function getDateDeNaissance(){
            return $this-> _dateDeNaissance;
        }

        public function setDateDeNaissance($date){
            $this-> _dateDeNaissance = $date;
        }

        public function __construct($nom, $prenom, $dateDeNaissance){
            $this-> _nom = $nom;
            $this-> _prenom = $prenom;
            $this-> _dateDeNaissance = $dateDeNaissance;
        }

        // Fonction qui calcule l'age d'une personne
        public function age(){
            $dateNaissance = new DateTime($this->_dateDeNaissance);
            $aujourdhui = new DateTime(date("Y-m-d"));
            // Creer deux instance de la classe DateTime
            $age = $dateNaissance->diff($aujourdhui);
            // Renvoie la difference entre les deux dates
            return $age->format('%y');
            // retourne la date en gardant uniquement l'année
        }

        public function __toString(){
            return "$this->_prenom $this->_nom a ".$this->age()." ans<br>";
        }
    }

    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
    echo $p1;
    echo $p2;

    // Definition class, objet, methode magique, l'encapsulation

/*

Une classe est l'ensemble d'objets ayant les memes proprietés
Un objet est une instance d'une classe ayant ses propres attributs et disposant des méthodes de sa classe.
Les méthodes magiques sont des méthodes prédéfinies dans chaque classes
L'encapsulation c'est la visibilité des attributs et fonction d'une classe (private, public, protcted)


*/
