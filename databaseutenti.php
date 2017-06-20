<?php


$dbh = new PDO("mysql:host=localhost;dbname=my_isatiri;username=isatiri");

mysql_select_db("my_isatiri") or die ("no database");
$tabella = "IgorDB";


$result = mysql_query("SELECT username FROM $tabella");
$useriscritti = array();
while($row = mysql_fetch_array($result)){
    $useriscritti[] = $row['username'];
}


$lista=$useriscritti;
$i = 0;
for($i = 0; $i < count($lista) ;$i++) {
 $temp = $lista[$i];
 $lista[$i] = '@'.$temp;}


if($msg=="/lista"){
  $stringanomi="<b>Utenti Iscritti al Database (".$i.")</b>:\n";
  foreach($lista as $porceddu) {
    $stringanomi = $stringanomi. "- ".$porceddu."\n";
  }
  sm($chatID, $stringanomi);
}


if(strstr($msg,"/user ")&&in_array($username, $useriscritti)){

  $finduser= substr($msg,6);
  if(!preg_match ('/^([a-zA-Z0-9]+)$/', $finduser)){
    sm($chatID,
    "ERRORE: inserisci nella ricerca username solo caratteri concessi: lettere e numeri");
  }



  if(in_array($finduser, $lista)){
    $finduser=substr($finduser,1);
    $datiutente=array();
    $fuck=mysql_query("SELECT nome, cognome, descrizione FROM IgorDB WHERE username='$finduser'");
    $datiutente = mysql_fetch_array($fuck);

    $findNome=$datiutente[nome];
    $findCognome=$datiutente[cognome];
    $findDescrizione=$datiutente[descrizione];
    if($findCognome==0){
      $findCognome="Null";
    }
    $findCompleto="<b>Username</b>: @$finduser

<b>Nome</b>: $findNome
<b>Cognome</b>: $findCognome

<b>Descrizione</b>: $findDescrizione";
    sm($chatID, $findCompleto);

  }elseif(in_array($finduser, $useriscritti)){
    $datiutente=array();
    $fuck=mysql_query("SELECT nome, cognome, descrizione FROM IgorDB WHERE username='$finduser'");
    $datiutente = mysql_fetch_array($fuck);

    $findNome=$datiutente[nome];
    $findCognome=$datiutente[cognome];
    $findDescrizione=$datiutente[descrizione];
    if($findCognome==0){
      $findCognome="Null";
    }
    $findCompleto="<b>Username</b>: @$finduser

<b>Nome</b>: $findNome
<b>Cognome</b>: $findCognome

<b>Descrizione</b>: $findDescrizione";
    sm($chatID, $findCompleto);

  }else{
    sm($chatID, "L'username inserito non è presente nel Database, verificare di averlo digitato correttamente.");
  }
}elseif(strstr($msg,"/user ")&&in_array($username, $useriscritti)==FALSE){
  sm($chatID, "Per utilizzare questa funzione, devi prima iscriverti!");
}


if(strstr($msg,"/database ")){
  $descrizione = substr($msg, 10);
  
  if(!preg_match ('/^([a-zA-Z0-9]+)$/', $descrizione)){
    sm($chatID,
    "ERRORE: inserisci nella ricerca username solo caratteri concessi: lettere e numeri");
  }

  if(in_array($username, $useriscritti)){
    mysql_query("UPDATE $tabella SET descrizione = '$descrizione' WHERE username='$username';");
    sm($chatID, "Descrizione aggiornata!");
  }
  else{
    if($username){
      mysql_query("insert into $tabella (username, nome, cognome, descrizione) values ('$username', '$nome', '$cognome', '$descrizione')");

    }
    else{
      sm($chatID, "Prima di iscriverti a questo database, verifica di avere un Username, dalle impostazioni di Telegram!");
    }
  }
}
