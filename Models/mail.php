<?php
class Mail extends Common{
    private $allegato;
    private $oggetto;

function __construct($mittente, $destinatario, $contenuto, $oggetto){
    parent::__construct($mittente, $destinatario,$contenuto);
    $this->oggetto = $oggetto;
} 

public function getOggetto(){
    return $this->oggetto;
}

public function getAllegato(){
    return $this->allegato;
}

public function setAllegato($allegato){
    $this->allegato = $allegato;
}

}
?>