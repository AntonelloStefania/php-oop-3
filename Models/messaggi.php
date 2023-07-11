<?php
class Messaggi extends Common{
    private $ultimoAccesso;
    private $visualizzato;

    function __construct($mittente, $destinatario, $contenuto, $ultimoAccesso, $visualizzato){
        parent::__construct($mittente, $destinatario, $contenuto);
        $this-> ultimoAccesso = $ultimoAccesso;
        $this-> visualizzato = $visualizzato;
    }
    public function getUltimoAccesso(){
        return $this->ultimoAccesso;
    }

    public function getVisualizzato(){
        return $this->visualizzato;
    }
    public function setVisualizzato(){
        $this->visualizzato = $visualizzato;
    }
}
?>