<?php
// On appelle la session
session_start();

// On écrase le tableau de session
$_SESSION = array();


// On détruit la session
session_destroy();

header("Location: http://127.0.0.1/bank_root/index.php");

?>
