<?php 
    $site_title = "Bourse";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
    include ("model/data/taux_bourse.php");
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

<?php 
    $script = "<script src='public/js/bourse.js'></script>"; 

    include ("view/template/footer.php");
?>