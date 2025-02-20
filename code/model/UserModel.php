<?php

require_once '../database/db.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getUserById($utilisateur_id) {
        $query = "SELECT * FROM `utilisateurs` WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($nom, $prenom, $email, $pass, $adress, $date_naissance, $pseudo) {
        $query ="INSERT INTO `utilisateurs` (`Nom`, `Prenom`, `email`, `password`, `adress`, `date_naissance`, `photo`, `pseudo`) 
        VALUES (:nom, :prenom, :email, :pass, :adress, :date_naissance, NULL, :pseudo)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':date_naissance', $date_naissance);
        $stmt->bindParam(':pseudo', $pseudo);
        return $stmt->execute();
    }

    public function logUser ($email, $pass) {
        $query = "SELECT * FROM `utilisateurs` WHERE email=:email AND password=:pass";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function futurTrajets ($utilisateur_id) {
        $query = "SELECT *, TIMEDIFF(heure_arrivee, heure_depart) AS 'hdif' FROM `covoiturages` INNER JOIN `voitures` ON car_covoit = voiture_id  WHERE car_covoit = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        return $stmt;
    }

    public function faitTrajets ($utilisateur_id) {
        $query = "SELECT *, TIMEDIFF(heure_arrivee, heure_depart) AS 'hdif' FROM `covoiturages` INNER JOIN `voitures` ON car_covoit = voiture_id  WHERE car_covoit = :utilisateur_id AND NOW()>date_arrivee";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        return $stmt;
    }

    public function voiture_user ($utilisateur_id) {
        $query = "SELECT * FROM `voitures` INNER JOIN `marques` ON marque_voiture = marque_id  WHERE appartient_voiture = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        return $stmt;
    }
}

