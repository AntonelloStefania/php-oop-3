<?php
class Messaggi extends Common{
    private $ultimoAccesso;
    private $visualizzato;
    public $invio;
    

    function __construct($mittente, $destinatario, $contenuto, $ultimoAccesso, $visualizzato, $invio){
        parent::__construct($mittente, $destinatario, $contenuto);
        $this-> ultimoAccesso = $ultimoAccesso;
        $this-> visualizzato = $visualizzato;
        $this->invio = $invio;
       
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
    public function getInvioMessage(){
       if($this->invio === true){
        return '<i class="fa-solid fa-check-double" style="color: #2495ff;"></i>';
       }else{
        return '<i class="fa-solid fa-check-double" style="color: #000000;"></i>';
       }
    }
   
 
}
?>