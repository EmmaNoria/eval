<?php

class Client
{
    private string $nom = "";
    private string $prenom = "";
    private string $sexe = "";
    private string $dateBirth = ""; 
    private int $nombreDeCommande = 0;
    private int $totalDepense = 0;

public function setNom (string $nom) {
    $this->nom = $nom;
}

public function getNom() {
   return $this->nom;
}

public function setPrenom(string $prenom) {
    $this->prenom = $prenom;
}

public function getPrenom () {
   return $this->prenom;
}

public function setSexe(string $sexe) {
    $this->sexe = $sexe;
}

public function getSexe () {
   return $this->sexe;
}

public function setAdresse (string $adresse) {
    $this->adresse = $adresse;
}

public function getAdresse () {
   return $this->adresse;
}

public function setDateBirth (string $dateBirth) {
    $this->dateBirth = $dateBirth;
}

public function getDateBirth () {
   return $this->dateBirth;
}

public function setNombreDeCommande (int $nombreDeCommande) {
    $this->nombreDeCommande = $nombreDeCommande;
}

public function getNombreDeCommande () {
   return $this->nombreDeCommande;
}

public function setTel (int $tel) {
    $this->tel = $tel;
}
public function getTel () {
   return $this->tel;
}

public function setTotalDepense (int $totalDepense) {
    $this->totalDepense = $totalDepense;
}

public function getTotalDepense () {
   return $this->totalDepense;
}

public function anniverseraire() : string {
    $dateNow = new DateTime();
    $dateNow->format('d/m');

    if ($this->dateBirth == $dateNow->format('d/m')) {
        return "JOYEUX ANNIVERSAIRE !"; 
    } else {
        return "C'est pas ton anniversaire";
    }
}

public function getDepenseTotale() : string {
    return  "Le pannier moyen est " . ($this->totalDepense/$this->nombreDeCommande) . "Euro";
}
}