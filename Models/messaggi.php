<?php
class Messaggi extends Common{
    private $ultimoAccesso;
    public $invio;

    function __construct($mittente, $destinatario, $contenuto, $ultimoAccesso,  $invio){
        parent::__construct($mittente, $destinatario, $contenuto);
        $this-> ultimoAccesso = $ultimoAccesso;
        $this->invio = $invio;
    }
    public function getUltimoAccesso(){
        return $this->ultimoAccesso;
    }

    public function getInvioMessage(){
       if($this->invio === true){
        return '<i class="fa-solid fa-check-double" style="color: #2495ff;"></i>';
       }else{
        return '<i class="fa-solid fa-check-double" style="color: #fff;"></i>';
       }
    }
 
}
?>