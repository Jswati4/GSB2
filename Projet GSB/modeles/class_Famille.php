<?php

class Famille {
    private $id_famille;
    private $libelle;

    public function __construct($id_famille, $libelle) {
        $this->id_famille = $id_famille;
        $this->libelle = $libelle;
    }

    public function getid(){
        return $this->id_famille;
    }

    public function getlibelle(){
        return $this->libelle;
    }

}
?>