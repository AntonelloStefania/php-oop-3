<?php
require 'Models/common.php';
require 'Models/mail.php';
require 'Models/allegato.php';
// class Common{
//     private $mittente;
//     private $destinatario;
//     private $contenuto;

//     function __construct($mittente, $destinatario, $contenuto){
//         $this->mittente = $mittente;
//         $this->destinatario = $destinatario;
//         $this->contenuto= $contenuto;
//     }

//     public function getMittente(){
//         return $this->mittente;
//     }

//     public function getDestinatario(){
//         return $this->destinatario;
//     }

//     public function getContenuto(){
//         return $this->contenuto;
//     }
// }

$prova = new Common('Franco Manco', 'Gianni Storto', 'messaggio casuale');
var_dump($prova);

// class Mail extends Common{
//     private $allegato;
//     private $oggetto;

// function __construct($mittente, $destinatario, $contenuto, $oggetto){
//     parent::__construct($mittente, $destinatario,$contenuto);
//     $this->oggetto = $oggetto;
// } 

// public function getOggetto(){
//     return $this->oggetto;
// }

// public function getAllegato(){
//     return $this->allegato;
// }

// public function setAllegato($allegato){
//     $this->allegato = $allegato;
// }

// }



$provaAllegato= new Allegato('musica.zip', '44mb');
$provamail = new Mail('franco','Mario','messaggio','comunicazione di servizio');
$provamail -> setAllegato($provaAllegato);
var_dump($provamail);

// class Allegato{
//     private $nome_file;
//     private $peso_file;

//     function __construct($nome_file, $peso_file){
//         $this->nome_file = $nome_file;
//         $this->peso_file = $peso_file;
//     }

//     public function getNomeFile(){
//         return $this->nome_file;
//     }

//     public function getPesoFile(){
//         return $this->peso_file;
//     }
// }


?>