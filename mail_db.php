<?php
$mail_1 = new Mail( 'Mario Giordano','Franco Rossi', 'Ciao Mario, ti invio questa mail per condividere con te una notizia entusiasmante.', 'Comunicazione urgente');
$allegato_1 = new Allegato('musica.zip', '44mb');
$mail_1-> setAllegato($allegato_1);

$mail_2 = new Mail( 'Luigi Verdi','Franco Rossi', 'Ciao Luigi, ho bisogno del tuo aiuto per completare un progetto urgente.', 'Richiesta di assistenza');

$mail_3 = new Mail( 'Paolo Russo','Franco Rossi', 'Caro Paolo, ti scrivo per chiederti un\'informazione riguardo al report che hai inviato.', 'Domanda sul report inviato');

$mail_4 = new Mail( 'Laura Conti','Franco Rossi', 'Salve Laura, vorrei discutere con te l\'opportunità di collaborare per un nuovo progetto.', 'Proposta di collaborazione');
var_dump($mail_4);

$mail_5 = new Mail( 'Maria Greco','Franco Rossi', 'Ciao Maria, ti scrivo per condividere con te una scoperta scientifica interessante.', 'Scoperta scientifica da condividere');
$allegato_2 = new Allegato('documento.pdf', '2.5mb');
$mail_5->setAllegato($allegato_2);
var_dump($mail_5);

$mail_6 = new Mail( 'Antonio Vitale','Franco Rossi', 'Buongiorno Antonio, ho una richiesta speciale per te riguardo all\'organizzazione dell\'evento.', 'Richiesta speciale per l\'evento');
$allegato_3 = new Allegato('foto.jpg', '1.2mb');
$mail_6->setAllegato($allegato_3);

$mail_7 = new Mail( 'Roberta Gatti','Franco Rossi', 'Gentile Roberta, ti invio questa mail per informarti di un evento imminente a cui sei invitata.', 'Invito a evento');

$mail_8 = new Mail( 'Elena Ferri','Franco Rossi', 'Salve Elena, ho un\'importante comunicazione da condividere con te riguardo al progetto di ricerca.', 'Comunicazione importante sul progetto di ricerca');
$allegato_4 = new Allegato('video.mp4', '120mb');
$mail_8->setAllegato($allegato_4);

$mail_9 = new Mail( 'Giovanni Bianchi','Franco Rossi', 'Ciao Giovanni, vorrei parlarti riguardo al progetto di ricerca che stiamo conducendo insieme.', 'Discussione sul progetto di ricerca');

$mail_10 = new Mail( 'Valentina Pellegrini','Franco Rossi', 'Salve Valentina, ti scrivo per condividere con te una richiesta di partecipazione a un\'importante conferenza.', 'Richiesta di partecipazione alla conferenza');
$allegato_5 = new Allegato('presentazione.pptx', '5.8mb');
$mail_10-> setAllegato($allegato_5);

$mailArray= [
    $mail_1,
    $mail_2,
    $mail_3,
    $mail_4,
    $mail_5,
    $mail_6,
    $mail_7,
    $mail_8,
    $mail_9,
    $mail_10
];




?>

