<?php
include 'users_action.php'
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
    <title><?php echo $id;?> <?php echo $email;?></title>
</head>

<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-3 bg-info p-4 rounded">
    <h2 class="bg-primary p-2 rounded text-center text-light "> ID :<?= $id ;?></h2>
  
       
        <h4 class="text-light">name : <?= $name; ?></h4>
          <h4 class="text-light">contactno : <?= $contactno; ?></h4>
            <h4 class="text-light">billingpincode : <?= $billingpincode; ?></h4>
            <h4 class="text-light">shippingAddress : <?= $shippingAddress; ?></h4>
            <h4 class="text-light">shippingAddress : <?= $shippingAddress; ?></h4>
            <h4 class="text-light">shippingState : <?= $shippingState; ?></h4>
            <h4 class="text-light">shippingCity : <?= $shippingCity; ?></h4>
            <h4 class="text-light">shippingPincode : <?= $shippingPincode; ?></h4>
            <h4 class="text-light">billingAddress : <?= $billingAddress; ?></h4>
            <h4 class="text-light">billingState : <?= $billingState; ?></h4>
            <h4 class="text-light">billingCity : <?= $billingCity; ?></h4>
           

</div>
    </div>
     </div>
    </body>
</html>
 