<?php
// Inclure les fichiers des classes et le fichier de configuration de la base de données
include_once '../modeles/class_Medecin.php';
include_once '../modeles/class_Medicament.php';
include_once '../modeles/class_Rapport.php';
include_once '../controleurs/c_param_connexion.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $date_rapport = $_POST['date_rapport'];
    $motif = $_POST['motif'];
    $bilan = $_POST['bilan'];
    $id_medecin = $_POST['id_medecin'];
    $id_medicament = $_POST['id_medicament'];
    $quantite = $_POST['quantite'];

    // Créer un objet Medecin en utilisant l'ID du médecin
    $medecin = new Medecin($id_medecin, "", "", "", "", "", "", "", "", "", "");

    // Créer un objet Medicament en utilisant l'ID du médicament
    $medicament = new Medicament($id_medicament, "", "", "", "", "","");

    // Créer un objet Rapport en utilisant les objets Medecin et Medicament
    $rapport = new Rapport($date_rapport, $motif, $bilan, "", $medecin, $medicament);

    // Ajouter le rapport à la base de données
    if ($rapport->nouveau_rapport()==true) {
        // Rediriger l'utilisateur vers une page de confirmation
        header('Location: ../vues/v_confirmation_rapport.php');
        exit();
    } else {
        // En cas d'échec, rediriger l'utilisateur vers une page d'erreur
        header('Location: ../vues/v_erreur.php');
        exit();
    }
} else {
    // Si le formulaire n'a pas été soumis, vous pouvez rediriger l'utilisateur ou afficher un message d'erreur
    header('Location: ../vues/v_erreur.php');
    exit();
}

?>

