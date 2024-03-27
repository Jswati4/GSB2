<?php

class Rapport {
    private $date_rapport;
    private $motif;
    private $bilan;
    private $id_visiteur;
    private $id_medecin;

    public function __construct($date_rapport, $motif, $bilan, $id_visiteur, $id_medecin) {
        $this->date_rapport = $date_rapport;
        $this->motif = $motif;
        $this->bilan = $bilan;
        $this->id_visiteur = $id_visiteur;
        $this->id_medecin = $id_medecin;
    }


    // Accesseurs
    public function getDateRapport() {
        return $this->_dateRapport;
    }

    public function getMotif() {
        return $this->_motif;
    }
	
    public function getBilan() {
        return $this->_bilan;
    }
    public function getIdVisiteur() {
        return $this->_id_visiteur;
    }
    public function getIdMedecin() {
        return $this->_id_medecin;
    }

//créer un nouveau rapport
public function nouveau_rapport() {
    global $lien_base;

    // Requête SQL pour insérer un nouveau rapport
    $sql = "INSERT INTO rapport (date_rapport, motif, bilan, id_visiteur_1, id_medecin_1)
            VALUES (:date_rapport, :motif, :bilan, :id_visiteur_1, :id_medecin_1)";
    
    
        $stmt = $lien_base->prepare($sql);
        $stmt->bindParam(':date_rapport',  $this->date_rapport);
        $stmt->bindParam(':motif', $this->motif);
        $stmt->bindParam(':bilan', $this->bilan);
        $stmt->bindParam(':id_visiteur_1',  $this->id_visiteur);
        $stmt->bindParam(':id_medecin_1',$this->id_medecin->getNom());

        if($stmt->execute()==true){
        // Vous n'avez pas besoin de vérifier le résultat ici, car l'insertion réussie signifie que le rapport a été ajouté à la base de données.
        return true;
        }else{
        return false; // Échec de l'insertion
    }
}



}// fin classe Visiteur
