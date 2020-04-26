<?php
include 'staff-action.php'
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
    <title><?php echo $vnom;?> <?php echo $vprenom;?></title>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-3 bg-info p-4 rounded">
      <h2 class="bg-primary p-2 rounded text-center text-light "> ID Employee : <?php echo $vidpers ;?></h2>
       <div class="text-center"> <img src="<?= $vphoto; ?>" width="300" class="img-thumbnail"></div> <br>
      <h4 class="text-light" style=" text-align:center;">First Name : <?php echo $vnom; ?></h4>
        <h4 class="text-light" style=" text-align:center;">Last Name : <?php echo $vprenom; ?></h4>
          <h4 class="text-light" style=" text-align:center;">Speciality : <?php echo $vspecialite; ?></h4>
            <h4 class="text-light" style=" text-align:center;">Email : <?php echo $vemailpers; ?></h4>
            <h4 class="text-light" style=" text-align:center;">Phone Number : <?php echo $vnumero; ?></h4>
</div>
    </div>
     </div>
    </body>
</html>