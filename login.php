
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta>
	<title> CHAUSTORE </title>
</head>
<body>

	<h1> Bienvenu </h1>
    <h2> CONNEXION</h2>
user: user1@gmail.com
pass;user1
	<!--formulaire session membre-->
	<form method="POST" action="">
    <p>
    <label> Adresse e-mail
    <input type="text" name="email">
    </label>
  </p>
  <p>
    <label> Mot de passe
    <input type="password" name="password">
    </label>
   </p>
    
    <input type="submit" name="connecter" value="se connecter">

  </form>

	<!--formulare inscription-->
	<h2> Inscription</h2> 
	<h4> C'est rapide et facile</h4>
	<form method="POST" action="form.php">

        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email1" value=""/>
            
        </p>

        <p>
            <label for="pass"> Mot de passe </label>
            <input type="password" name="password1" value="" /> 
            
        </p> 
          
        <p>
        <label for="date"> Birthday </label>
            <input type="date" name="birthday" value="" /> 
            
        </p>    
        <input type="submit"  value="Inscription" name="create" />
        </form>
           
</body>
</html>

 <!--form login ->
<?php
session_start();
require_once('connection.php');

if(isset($_POST['connecter']))
{
	if(empty($_POST['email']) || empty($_POST['password'])) 
	{
		echo "Veuillez saisir les champs";
	}
	 else 
	 {
	 	$query= "SELECT * from user WHERE email='".$_POST['email']."' and password='".$_POST['password']."' ";
	 	$result=mysqli_query($con, $query);

	 	if(mysqli_fetch_assoc($result)) 
	 	{
	 		$SESSION['email']=$_POST['email'] || $SESSION['password']=$_POST['password'];
	 		header("location:biologie.php");
	 	}

	 	else {
	 			echo " Verifier vos donnes";
	 	}
	 }

} 
?>

