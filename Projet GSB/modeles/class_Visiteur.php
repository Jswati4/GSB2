<?php
include_once '../controleurs/c_param_connexion.php';

class Visiteur {
	private $_nom ;
	private $_prenom;
	private $_email;
	private $_login;
	private $_mdp;
	private $_adresse;
	private $_tel;
	private $_cp;
	private $_ville;
	private $_date_embauche;
	
	
public function __construct($nom='?', $prenom='?', $email= '?',$login= '?',$mdp= '?', $adresse='?', $tel='?', $cp= '?',$ville= '?',$date_embauche= '?')
{	
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_email = $email; 
		$this->_login = $login;
		$this->_mdp = $mdp;
		$this->_adresse = $adresse;
		$this->_tel = $tel;
		$this->_cp = $cp; 
		$this->_ville = $ville;
		$this->_date_embauche = $date_embauche;
}

    // Accesseurs
    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }
	
    public function getEmail() {
        return $this->_email;
    }

    public function getLogin() {
        return $this->_login;
    }
	public function getMdp() {
        return $this->_mdp;
    }

    public function getAdresse() {
        return $this->_adresse;
    }
	public function getTel() {
        return $this->_tel;
    }

    public function getCp() {
        return $this->_cp;
    }
	public function getVille() {
        return $this->_ville;
    }

    public function getDateEmbauche() {
        return $this->_date_embauche;
    }


	public function inscription()
{
    global $lien_base; 

    // Requête SQL d'insertion
    $sql = "INSERT INTO visiteur (nom, prenom, email, login, mdp, adresse, tel, cp, ville, date_embauche) 
            VALUES (:nom, :prenom, :email, :login, :mdp, :adresse, :tel, :cp, :ville, :date_embauche)";
    
    try {
        $stmt = $lien_base->prepare($sql);
        $stmt->bindParam(':nom', $this->_nom);
        $stmt->bindParam(':prenom', $this->_prenom);
        $stmt->bindParam(':email', $this->_email);
        $stmt->bindParam(':login', $this->_login);
        $stmt->bindParam(':mdp', $this->_mdp);
        $stmt->bindParam(':adresse', $this->_adresse);
        $stmt->bindParam(':tel', $this->_tel);
        $stmt->bindParam(':cp', $this->_cp);
        $stmt->bindParam(':ville', $this->_ville);
        $stmt->bindParam(':date_embauche', $this->_date_embauche);

        $stmt->execute();
        return true; // Succès de l'insertion
    } catch (PDOException $e) {
        // En cas d'erreur
        return false;
    }
}

public function connexion($login, $mdp) {
    global $lien_base; // Assurez-vous que $lien_base est correctement défini dans votre script de connexion.

    // Requête SQL pour vérifier l'authentification
    $sql = "SELECT * FROM visiteur WHERE login = :login AND mdp = :mdp";
    
    try {
        $stmt = $lien_base->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':mdp', $mdp);

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return true; // Authentification réussie
        } else {
            return false; // Échec de l'authentification
        }
    } catch (PDOException $e) {
        return false;
    }
}

}// fin classe Visiteur
