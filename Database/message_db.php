<?php



$messaggio_1 = new Messaggi('Paolo Rossi', 'Marco Menga', 'Ciao come stai? Non ci si sente da molto.', '18.43', true, false);
$messaggio_2 = new Messaggi('Maria Bianchi', 'Marco Menga', 'Buongiorno, hai tempo per una chiacchierata?', '10.12', false, true);
$messaggio_3 = new Messaggi('Giovanni Neri', 'Marco Menga', 'Ti va di vederci stasera per una partita di calcetto?', '21.30', true, true);
$messaggio_4 = new Messaggi('Chiara Esposito', 'Marco Menga', 'Domani sera organizziamo una cena a casa mia, ci sei?', '19.15', true, true);
$messaggio_5 = new Messaggi('Andrea Costa', 'Marco Menga', 'Sono appena arrivato, ci vediamo tra un po\'?', '16.50', true, true);
$messaggio_6 = new Messaggi('Roberta Neri', 'Marco Menga', 'Ricordati di comprare il pane per la cena', '14.20', false, false);
$messaggio_7 = new Messaggi('Mario Bianchi', 'Marco Menga', 'Ci vediamo al solito posto alle 18.00?', '17.45', true, false);
$messaggio_8 = new Messaggi('Laura Moretti', 'Marco Menga', 'Ho bisogno del tuo aiuto per un progetto, ti va di incontrarci domani?', '11.30', false, true);
$messaggio_9 = new Messaggi('Francesco Neri', 'Marco Menga', 'Ho finito di leggere il libro che mi hai prestato, è fantastico!', '22.10', true, true);
$messaggio_10 = new Messaggi('Marco Esposito', 'Marco Menga', 'Ti va di andare al cinema stasera?', '20.00', true, false);
var_dump($messaggio_10);
var_dump($messaggio_7);
var_dump($messaggio_3);
$arrayMessaggi=[
    $messaggio_1,
    $messaggio_2,
    $messaggio_3,
    $messaggio_4,
    $messaggio_5,
    $messaggio_6,
    $messaggio_7,
    $messaggio_8,
    $messaggio_9,
    $messaggio_10
]
?>