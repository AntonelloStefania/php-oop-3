<?php
class Notifiche extends Common{
    private $icona;
    private $anteprima_messaggio;

    function __construct($mittente, $destinatario, $contenuto , $anteprima_messaggio ,$icona){
        parent::__construct($mittente, $destinatario, $contenuto);
        $this->icona=$icona;
        $this->anteprima_messaggio=$anteprima_messaggio;
    }

    public function getIcona(){
        return $this->icona;
    }

    public function getAnteprima(){
        return $this->anteprima_messaggio;
    }

    public function setAnteprima($lunghezza_contenuto){
        $this->anteprima_messaggio = substr($this->getContenuto(), 0 , $lunghezza_contenuto).'...';
    }
}
?>