<?php
require_once('connection.php');
?>
<?php
$msg="";
  
	if(isset($_POST['create']))
	{
        $email =$_POST['email1'];
        $password=$_POST['password1'];
        $birthday=$_POST['birthday'];

		    $req = 'INSERT INTO user (email,password,birthdate)
               VALUES("'.$email.'",'.$password.','.$birthday.');';
        
      	    mysqli_query($con,$req);

            var_dump($req);
        }

        else{
            echo"reseyar";
        }

?>