<?php
require_once('connection.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query2 = 'DELETE FROM post WHERE id='.$id;
    mysqli_query($con, $query2);

    var_dump($query2);
}

