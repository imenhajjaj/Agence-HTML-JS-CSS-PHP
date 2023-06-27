<?php 

require_once ('connect.php');
  if (isset($_POST) & !empty($_POST)) {
    $nomhotel = ($_POST['nomhotel']);
    $ville = ($_POST['ville']);
    $email = ($_POST['email']);
    $prix = $_POST['prix'];
    $age = $_POST['age'];

    $CreateSql = "INSERT INTO `offre` (nomhotel,   ville, email, prix, age)  VALUES('$nomhotel', '$ville', '$email', '$prix', '$age') ";
    $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
    if ($res) {
      $message = "insertion reussi avec succès";
    }else{
      $erreur = "erreur d'insertion a la base";
    }
  }

 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >
</head>
<body >
  <?php   
    include 'navbar.php';
   ?>

  <div class="container" style="background-color:rgba(222,222,222);>
    <div class="row pt-4">
      <?php if (isset($message)) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $message; ?>
        </div> <?php } ?>

        <?php if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $erreur; ?>
        </div> <?php } ?>

      <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
        <h2> </h2>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Nom d'hotel</label>
          <div class="col-sm-10">
            <input type="text" name="nomhotel" placeholder="Nom hotel" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">ville</label>
          <div class="col-sm-10">
            <input type="text" name="ville" placeholder="ville" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" placeholder="e-mail" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Prix</label>
          <div class="col-sm-10">
            <input type="text" name="prix" placeholder="prix" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Age</label>
          <div class="col-sm-10">
            <input type="text" name="age" placeholder="age" class="form-control" id="input1">
          </div>
        </div>

        <div class="pt-4">
          <input type="submit" value="submit" class="btn btn-primary m-3">
          <a href="view.php">
            <button class="btn btn-success m-3" type="button">
              voir la liste
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>