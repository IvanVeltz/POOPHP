<?php

/* Creer une classe voiture avec les proprietes suivantes : marque, modele, nbPortes et vitesseActuelle
ainsi que les méthodes demarrer(), accelerer(), et stopper() en plus des accesseurs et mutateurs.
La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher
toutes les informations d'un véhicule.
*/

class Voiture{

    //Propriété
    private $_marque;
    private $_modele;
    private $_nbrPortes;
    private $_vitesseActuelle = 0;
    private $_demarre = FALSE;

    // Accesseurs et mutateurs
    public function getMarque(){
        return $this->_marque;
    }
    public  function setMarque($marque){
        $this->_marque = $marque;
    }

    public function getModele(){
        return $this->_modele;
    }
    public  function setModele($modele){
        $this->_modele = $modele;
    }

    public function getNbrPortes(){
        return $this->_nbrPortes;
    }
    public  function setNbrPortes($nbrPortes){
        $this->_nbrPortes = $nbrPortes;
    }

    public function getVitesseActuelle(){
        return "La vitesse du véhicule $this->_marque $this->_modele est de $this->_vitesseActuelle km / h<br>";
    }
    public  function setVitesseActuelle($vitesseActuelle){
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    //constructeur
    public function __construct($marque, $modele, $nbrPortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbrPortes = $nbrPortes;
    }

    // methodes
    public function demmarer(){
        if(!$this->_demarre){
            $this->_demarre = TRUE;
            echo "Le véhicule $this->_marque $this->_modele démarre<br>";
        } else {
            echo "Le véhicule $this->_marque $this->_modele est déjà démarré<br>";
        }
    }

    public function accelerer($vitesse){
        if($this->_demarre){
            $this->_vitesseActuelle += $vitesse;
            echo "Le véhicule $this->_marque $this->_modele accélere de $vitesse km / h<br>";
        } else {
            echo "Le véhicule $this->_marque $this->_modele veut accélerer de $vitesse km / h<br>
                    Pour accélerer il faut demarrer le vehicule $this->_marque $this->_modele<br>";
        }
    }

    public function freiner($vitesse){
        if($this->_demarre){
            $this->_vitesseActuelle -= $vitesse;
            echo "Le véhicule $this->_marque $this->_modele freine de $vitesse km / h<br>";
        } else {
            echo "Le véhicule $this->_marque $this->_modele est stopppé, il ne peut pas freiner<br>";
        }
    }

    public function stopper(){
        if($this->_demarre){
            $this->_demarre = FALSE;
            $this->_vitesseActuelle = 0;
            echo "Le véhicule $this->_marque $this->_modele est stoppé<br>";
        } else {
            echo "Le véhicule $this->_marque $this->_modele est déjà stoppé<br>";
        }
    }

    public function __toString(){
        if($this->_demarre){
            $etat = "demarré";
        } else {
            $etat = "à l'arrêt";
        }
        return "Nom et modèle du vehicule : $this->_marque $this->_modele<br>
                Nombre de portes : $this->_nbrPortes<br>
                Le vehicule $this->_marque est $etat<br>
                Sa vitesse actuelle est de : $this->_vitesseActuelle<br>";
        
    }

}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);

$v1->demmarer();
$v1->accelerer(50);
$v2->demmarer();
$v2->demmarer();
$v2->stopper();
$v2->accelerer(20);
echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();
$voitures = [$v1, $v2];
for ($i=0 ; $i < count($voitures) ; $i++) { 
    echo "<br>Infos Véhicule $i<br>
            ******************<br>$voitures[$i]";
    
}