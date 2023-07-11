<?php
require 'Models/common.php';
require 'Models/mail.php';
require 'Models/allegato.php';
require 'Models/messaggi.php';
require 'Models/notifiche.php';

require 'Database/mail_db.php';
require 'Database/message_db.php';

$prova = new Common('Franco Manco', 'Gianni Storto', 'messaggio casuale');
var_dump($prova);







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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP-OOP-3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12"><h2>EMAIL:</h2></div>
            <?php foreach($mailArray as $mail){?>
            <div class="col-4 card">
                <span><strong>Mittente:</strong> <?php echo $mail-> getMittente() ?></span>
                <span><strong> Oggetto:</strong> <?php echo $mail->getOggetto()?></span>
                <?php if(!is_null($mail->getAllegato())) {?>
                    <span class="card text-center p-2"><i class="fa-solid fa-paperclip" style="color: #000000;"></i> <?php echo $mail->getAllegato()->getNomeFile()?> - <?php echo $mail->getAllegato()->getPesoFile() ?></span>
                <?php }?>
                <p><?php echo $mail->getContenuto()?></p>
                <span><strong>Destinatario:</strong> <?php echo $mail->getDestinatario() ?></span>
            </div>
            <?php }?>
        </div>
        <div class="row">
            <div class="col-12"><h2>MESSAGGI:</h2></div>
            <?php foreach($arrayMessaggi as $messaggi) { ?>
                <div class="card text-center col-6 offset-3">
                    <span>Contatto: <?php echo $messaggi->getMittente()?></span>
                    <span>Ultimo Accesso: <?php echo $messaggi->getUltimoAccesso()?></span>
                    <div>
                        <p><?php echo $messaggi->getContenuto()?></p>
                    </div>
                    <span class="text-end"> <?php echo $messaggi->getInvioMessage()?></span>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>