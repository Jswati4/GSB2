<?php
include_once '../controleurs/c_param_connexion.php';
include_once '../modeles/class_Visiteur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    $visiteur = new Visiteur();

    if ($visiteur->connexion($login, $mdp)) {
        // L'authentification a réussi, redirigez l'utilisateur vers la page d'accueil
        header('Location: ../vues/v_acceuil.php');
    } else {
        echo 'Le login ou bien le mot de passe est incorrect.';
        // Échec de l'authentification, affichez un message d'erreur ou redirigez vers la page de connexion
        header('Location: ../vues/v_connexion.php');
    }
}
?>
