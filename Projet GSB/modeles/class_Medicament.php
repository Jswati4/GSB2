<?php

class Medicament {
    private $id_medicament;
    private $nomCommercial;
    private $id_famille;
    private $composition;
    private $effets;
    private $contreIndication;
    private $id_famille_1;

    public function __construct($id_medicament, $nomCommercial, $id_famille, $composition, $effets, $contreIndication, $id_famille_1) {
        $this->id_medicament = $id_medicament;
        $this->nomCommercial = $nomCommercial;
        $this->id_famille = $id_famille;
        $this->composition = $composition;
        $this->effets = $effets;
        $this->contreIndication = $contreIndication;
        $this->id_famille_1 = $id_famille_1;
    }

    public function getid(){
        return $this->id_medicament;
    }
    public function getNom(){
        return $this->nomCommercial;
    }
    public function getid_famille(){
        return $this->id_famille;
    }
    public function getcomposition(){
        return $this->composition;
    }
    public function geteffets(){
        return $this->effets;
    }
    public function getcontreIndication(){
        return $this->contreIndication;
    }
    public function getid_famille_1(){
        return $this->id_famille_1;
    }
}
?>