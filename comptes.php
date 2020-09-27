<?php 
    $site_title = "Mes comptes";
    include ("template/nav.php");
    include ("template/header.php");
?>

<?php 
    include "data/accounts.php";
?>

<?php
foreach ($return as $value): 
?>
    <span><?php echo $value["name"] ."<br> ". $value["number"] . "<br>" . $value["owner"] . "<br>" . $value ["amount"] . "<br>" . $value["last_operation"] . "<br>" ?></span>;
    <a href='compte.php?name=<?php echo $value["name"] ?>'>Consulter le compte</a>;
<?php
endforeach;
?>

<?php 
    include ("template/footer.php");
?>