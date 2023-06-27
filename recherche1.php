<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="travel/css/style.css" />
    <link rel="stylesheet" href="css/style.css"/>

    <title>recherche</title>
</head>

    


<?php         

$servername = "127.0.0.1";       
$username = "root";           
$password = "";             
$dbname = "polytech";           

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);   
}

$nomhotel="";
$prix="";

function getPosts()
{ 
    $posts=array();
    $posts[0]= $_POST['nomhotel'];
    $posts[1]= $_POST['prix'];

    return $posts;
    }
    if (isset($_POST['recherche']))
    { 
        $data = getPosts();

        $search_Query ="SELECT * FROM offre where nomhotel LIKE '$data[0]'";   
    
        $search_Result=mysqli_query ($conn,$search_Query);

        if($search_Result)
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $nomhotel=$row['nomhotel'];
                $prix=$row['prix'];
            }
        }else {
            echo 'no data for this nom';
        }
    }else{
        echo '';
    }
?> 
<body style="background-color:rgba(241,239,239); color:black;font-size:30px";> 
    <div class="form1" style="background-color:rgb(241,239,239); ">
    <form method="POST" action="" >
    <h1>Trouver votre hotel</h1>
        <fieldset>
            <legend>saisir nom d'hotel</legend>
            <label>name :</label><input type="text" name="nomhotel" value="<?php echo $nomhotel;?>" placeholder="name" style="width:500px"><br>
            <label>prix pr personne :</label><input type="text" name="prix" placeholder="" style="width: 500px;" value="<?php echo $prix;?>"  placeholder=""><br>
        </fieldset>
      
        <input type="submit" name="recherche" value="recherche">
</form>


    </div>
    <section class="about" id="about" style="width:100%; align:center;">
  <div class="video-container" data-aos="fade-right" data-aos-delay="300" style="width:600px;">
      <video src="restaurant.mp4" muted autoplay loop class="video"></video>
      <div class="controls">
          <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
          <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
          <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
      </div>
  </div>
  <div class="content" data-aos="fade-left" data-aos-delay="600">
      <h3>Bienvenue chez votre agence de voyages agence travel !</h3>
      <p>
Notre agence de voyages est heureuse de vous accueillir pour vous conseiller sur vos prochains voyages, vos séjours ou vos week ends. 
Vous trouverez toujours chez nous une écoute attentive, un conseil personnalisé et surtout un vaste choix de destinations pour trouver les vacances dont vous rêvez ! 
N'hésitez pas à nous contacter ,une équipe de Professionnels est à votre service
A très bientôt
</p>
      <a href="main.html" class="btn">Accueil</a>
  </div>  
</section>
 </body>

</html>



