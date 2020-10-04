<?php 
    $site_title = "Bourse";
    include ("template/nav.php");
    include ("template/header.php");
?>

<?php 
    include ("data/taux_bourse.php");
?>

<main class="container">
    <table class="table">
        <thead class="thead-dark" id="headList">
            <!-- th -->
        </thead>
        <tbody id="list">
            <tr>
                <th scope="row index"></th>
                <!-- td -->
            </tr>
        </tbody>
    </table>
</main>

<?php $script = "<script src='public/js/bourse.js'></script>"; ?>

<?php 
    include ("template/footer.php");
?>