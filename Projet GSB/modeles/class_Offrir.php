<?php

class Offrir {
    private $id_rapport;
    private $id_medicament;
    private $quantite;

    public function __construct($id_rapport, $id_medicament, $quantite) {
        $this->id_rapport = $id_rapport;
        $this->id_medicament = $id_medicament;
        $this->quantite = $quantite;
    }

    public function getid(){
        return $this->id_rapport;
    }
    public function getid_medicament(){
        return $this->id_medicament;
    }
    public function getquantite(){
        return $this->quantite;
    }
}

?>