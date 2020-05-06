<?php
require_once('connection.php');
?>
<label for="story">Postez votre sujet !!</label> <br>

<form method="POST">
<input type="text" name="content"> <br>
<label for="start">Choisi date:</label>
<input type="date" name="date" >
<input class="favorite styled" type="submit" name="valider" value="Ajouter">
</form>

<?php
if(isset($_POST['valider'])){
$content = $_POST['content'];
$date = $_POST['date'];
$query='INSERT INTO post (postdate,content) VALUES ("'.$date.'","'.$content.'");';

mysqli_query($con,$query);
var_dump($query);
}
 else{
    echo"reesayer";
} 
?> 


<h2> POST </h2>
<?php
$sql = 'SELECT * from post';
$result =mysqli_query($con, $sql);

while($exe=mysqli_fetch_assoc($result)){
    echo $exe["postdate"]."<br>";
    echo $exe["content"]."<br>";
    echo"<td><input type='button' value='delete' onclick=\"location.href='delete.php?id=".$exe["id"]."';\"><br>";
  

}


