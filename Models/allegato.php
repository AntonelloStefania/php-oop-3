<?php
class Allegato{
    private $nome_file;
    private $peso_file;

    function __construct($nome_file, $peso_file){
        $this->nome_file = $nome_file;
        $this->peso_file = $peso_file;
    }

    public function getNomeFile(){
        return $this->nome_file;
    }

    public function getPesoFile(){
        return $this->peso_file;
    }
}
?>