<?php
require_once('connection.php');

$querytopic='SELECT * from topic';

$result1 = mysqli_query($con,$querytopic);

while($execute= mysqli_fetch_array($result1)){
    
?>   <h2>Topic 1 / 2</h2>

    <a href="login.php"><?php echo $execute["title"]."<br>"; ?> </a>
<?php
}
