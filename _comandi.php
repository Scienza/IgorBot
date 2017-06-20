<?php


if($msg == "/start"){
  sm($chatID, "Benvenuto nel bot ufficiale di @scienza.

Da qua, puoi iscriverti al database del gruppo e trovare informazioni sugli altri membri.

Trovi le spiegazioni di tutti i comandi del bot qua: /comandi");
}



if($msg=="/comandi" || $msg=="/help" ){
  sm($chatID, "I comandi principali sono:

- /database -> Per l'iscrizione al Database
- /lista -> Per visualizzare l'elenco degli utenti iscritti
- /user -> Per cercare informazioni su un utente in particolare");
}


if($msg == "/database"){
  sm($chatID, "Per iscriverti al Database, digita /database seguito da una breve descrizione del tuo ambito di studio o lavorativo.

Ex. /database Quinto Anno, Liceo Scientifico");
}


if($msg=="/user"){
  sm($chatID, "Per cercare informazioni su un particolare utente, digita /user seguito dal suo username.

Ex. /user @Paolo_xy");
}


if(strstr($msg,"Ciao Igor")){
  sm($chatID, "Buongiorno");
}


if($msg=="/time"){
  $time=time();
  sm($chatID, "Unix time ".$time);
}
