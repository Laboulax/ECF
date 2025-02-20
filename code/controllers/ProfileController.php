<?php

require_once '../model/UserModel.php';

session_start();

class ProfileController {

    private $model;


    public function __construct() {
        $this->model = new UserModel();
    }

    public function handle() {
            
        $utilisateur_id = $_SESSION['uti_id'];
        $info_user = $this->model->getUserById($utilisateur_id);
        if ($info_user != NULL && $info_user['utilisateur_id'] != false) {
            $nom = $info_user['Nom'];
            $prenom = $info_user['Prenom'];
            $email = $info_user['email'];
            $adress = $info_user['adress'];
            $photo = $info_user['photo'];
            $pseudo = $info_user['pseudo'];
        }

        $trajet_futur = "";

        $trajet_user = $this->model->futurTrajets($utilisateur_id);
        
        foreach ($trajet_user as $value) {
            $trajet_futur .=

            "<tr>
            <td> ".$value['date_depart']." </td>
            <td> ".$value['heure_depart']." </td>
            <td> ".$value['heure_arrivee']." </td>
            <td> ".$value['hdif']." </td>
            <td> ".$value['prix_personne']." €</td>
            <td> ".$value['nb_place']." </td>
            </tr>";

        }

        $trajet_fait = "";

        $trajet_user = $this->model->faitTrajets($utilisateur_id);
        
        foreach ($trajet_user as $value) {
            $trajet_fait .=

            "<tr>
            <td> ".$value['date_depart']." </td>
            <td> ".$value['heure_depart']." </td>
            <td> ".$value['heure_arrivee']." </td>
            <td> ".$value['hdif']." </td>
            <td> ".$value['prix_personne']." €</td>
            </tr>";

        }

        $voiture_user = "";

        $voiture_info = $this->model->voiture_user($utilisateur_id);
        
        foreach ($voiture_info as $value) {
            $voiture_user .=

            "<tr>
            <td> ".$value['modele']." </td>
            <td> ".$value['immatriculation']." </td>
            <td> ".$value['libelle']." </td>
            </tr>";

        }
        
        require_once '../views/profile.php';
    }
}