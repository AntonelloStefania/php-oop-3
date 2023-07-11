<?php
require 'Models/common.php';
require 'Models/mail.php';
require 'Models/allegato.php';
require 'Models/messaggi.php';
require 'Models/notifiche.php';

require 'mail_db.php';

$prova = new Common('Franco Manco', 'Gianni Storto', 'messaggio casuale');
var_dump($prova);


$provaMessaggio= new Messaggi('Paolo', 'Nicandro','we ciao grandissimo',13.49, true);
var_dump($provaMessaggio);




$provaNotifica = new Notifiche('franco','mauro','ciao franco come stai non ti fai sentire dal milleottocentoquindici','','immagineStock');
$provaNotifica->setAnteprima(20);
var_dump($provaNotifica);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP-OOP-3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
            <?php foreach($mailArray as $mail){?>
            <div class="col-auto card">
                <span><?php echo $mail-> getMittente() ?></span>
                <span><?php echo $mail->getOggetto()?></span>
                <?php  if(get_class($mail) == 'Allegato') {?>
                    <span><?php echo 'ciao' ?></span>
                <?php }?>
                <p><?php echo $mail->getContenuto()?></p>
                <span><?php echo $mail->getDestinatario() ?></span>
            </div>
            <?php }?>
        </div>
    </div>
    
</body>
</html>