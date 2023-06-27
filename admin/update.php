<?php 

require_once ('connect.php');

  $id = $_GET['id'];
  $selSql = "SELECT * FROM `offre` WHERE id=$id";
  $res = mysqli_query($con, $selSql);
  $r = mysqli_fetch_assoc($res);

  if (isset($_POST) & !empty($_POST)) {
    $nomhotel = ($_POST['nomhotel']);
    $ville = ($_POST['ville']);
    $email = ($_POST['email']);
    $prix = $_POST['prix'];
    $age = $_POST['age'];

    $UpdateSql = "UPDATE `offre` SET nomhotel='$nomhotel',  ville='$ville', email='$email', prix='$prix', age='$age'  WHERE id=$id ";

    $res = mysqli_query($con, $UpdateSql);
    if ($res) {
      header("location: view.php");
    }else{
      $erreur = "la mise à jour a échoué.";
    }
  }

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Modifier la liste d'hotel
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >
</head>
<body>
  <?php   
    include 'navbar.php';
   ?>

  <div class="container">
    <div class="row pt-4">
        <?php if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $erreur; ?>
        </div> <?php } ?>

      <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
        <h2></h2>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Nom d'hotel</label>
          <div class="col-sm-10">
            <input type="text" name="nomhotel" placeholder="Nom hotel" 
            class="form-control" id="input1"
            value="<?php echo $r['nomhotel'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">ville</label>
          <div class="col-sm-10">
            <input type="text" name="ville" placeholder="ville" class="form-control" id="input1"
            value="<?php echo $r['ville'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" placeholder="e-mail" class="form-control" id="input1"
            value="<?php echo $r['email'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Prix</label>
        <div class="col-sm-10">
            <input type="text" name="prix" placeholder="prix" class="form-control" id="input1"
            value="<?php echo $r['prix'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Age</label>
        <div class="col-sm-10">
            <input type="text" name="age" placeholder="age" 
            class="form-control" id="input1"
            value="<?php echo $r['age'] ?>">
          </div>
        </div>

        <div class="pt-4">
          <input type="submit" value="Modifier" class="btn btn-primary m-3">
          
        </div>
      </form>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>