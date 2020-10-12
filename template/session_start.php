<?php
    session_start();
    if(!isset($_SESSION["user"]) OR empty($_SESSION["user"])) {
        header("Location: http://127.0.0.1/bank_root/inscription.php");
    }
?>