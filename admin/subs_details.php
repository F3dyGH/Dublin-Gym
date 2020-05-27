<?php
include 'subs_action.php'
?>
<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<head>
    <title><?php echo $id_abon;?> <?php echo $type_abon;?></title>
</head>

<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-3 bg-info p-4 rounded">
    <h2 class="bg-primary p-2 rounded text-center text-light "> ID :<?= $id_abon ;?></h2>
  
      <h4 class="text-light">type of subscription : <?= $type_abon; ?></h4>
        <h4 class="text-light">duration : <?= $dure_abon; ?></h4>
          <h4 class="text-light">description : <?= $description; ?></h4>
            <h4 class="text-light">montant : <?= $montant; ?></h4>
</div>
    </div>
     </div>
    </body>
</html>

 