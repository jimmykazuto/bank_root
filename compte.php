<?php 
    $site_title = "Mon compte";
    include ("template/nav.php");
    include ("template/header.php");
?>

<h2>Vous consultez le compte :</h2>

<?php 
if(isset($_GET["name"]) AND !empty($_GET["name"])) {
    echo htmlspecialchars($_GET["name"]);
}
?>

<a href="comptes.php?param=DutextetransmisparURL">Retourner sur vos comptes</a>

<p><?php echo $value["name"] ."<br> ". $value["number"] . "<br>" . $value["owner"] . "<br>" . $value ["amount"] . "<br>" . $value["last_operation"] . "<br>" ?></p>;

<?php 
    include ("template/footer.php");
?>