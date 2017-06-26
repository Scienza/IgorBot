<?php


if($msg == "/start"){
  sm($chatID, "Benvenuto nel bot ufficiale di @scienza.

Da qua, puoi iscriverti al database del gruppo e trovare informazioni sugli altri membri.

Trovi le spiegazioni di tutti i comandi del bot qua: /comandi");
}



if($msg=="/comandi" || $msg=="/help" ){
  sm($chatID, "I comandi principali sono:

- /iscrivi -> Per l'iscrizione al Database
- /lista -> Per visualizzare l'elenco degli utenti iscritti
- /database -> Per visualizzare il database degli utenti
- /user -> Per cercare informazioni su un utente in particolare");
}


if($msg == "/database"){
  sm($chatID, "Per iscriverti al Database, digita /iscrivi seguito da una breve descrizione del tuo ambito di studio o lavorativo.

Ex. /iscrivi Quinto Anno, Liceo Scientifico");
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
