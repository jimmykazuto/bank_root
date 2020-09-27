<?php
$site_title = "Bank-Root";
include "template/nav.php";
include "template/header.php";
?>

<h2>Vos comptes</h2>

<?php
include "data/accounts.php";
// include "comptes.php";
?>

<!-- pour faire transiter des petites données -->
<a href="comptes.php?param=DutextetransmisparURL">Voir vos comptes</a>

<?php
include "template/footer.php";
?>