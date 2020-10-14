<h2>Vous consultez le compte :</h2>
<div class="row">
<div class="col-12 col-sm-10 col-md-6 col-lg-5">
    <div class="card text-center">
        <section class="card-body">
            <h5 class="card-title"><?php echo $account["account_type"];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $account["number"];?></h6>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $account["owner"];?></li>
                <li class="list-group-item"><?php echo $account["amount"];?></li>
                <li class="list-group-item"><?php echo $account["last_operation"];?></li>
            </ul>
            <hr>
            <a href="depot-retrait.php" class="btn btn-primary">Dépot / Retrait</a>
            <a href="virement.php" class="btn btn-primary">Virement</a>
            <a href="supprimer.php" class="btn btn-primary">Cloturer</a>
            <hr>
            <a href="compte.php?pos=<?php echo $key; ?>">Retourner sur vos comptes</a>
        </section>
    </div> 
    <div class="col-12 col-sm-10 col-md-6 col-lg-5">
    <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Label</th>
              <th scope="col">Date</th>
              <th scope="col">Type</th>
              <th scope="col">Montant</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($operations as $operation) : ?>
              <tr>
                <th><?php echo $operation["operation_id"]; ?></th>
                <td><?php echo $operation["label"]; ?></td>
                <td><?php echo $operation["registered"]; ?></td>
                <td><?php echo $operation["operation_type"]; ?></td>
                <td><?php echo $operation["operation_amount"]; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
</div>
</div>