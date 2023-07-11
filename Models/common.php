<?php
class Common{
    private $mittente;
    private $destinatario;
    private $contenuto;

    function __construct($mittente, $destinatario, $contenuto){
        $this->mittente = $mittente;
        $this->destinatario = $destinatario;
        $this->contenuto= $contenuto;
    }

    public function getMittente(){
        return $this->mittente;
    }

    public function getDestinatario(){
        return $this->destinatario;
    }

    public function getContenuto(){
        return $this->contenuto;
    }
}

?>