<?php

  require_once 'databaseutenti.php';

  echo "<br>Plugin Gruppi: 3.0";

  $replyID = $update["message"]["reply_to_message"]["from"]["id"];
  $replyNome = $update["message"]["reply_to_message"]["from"]["first_name"];


?>
