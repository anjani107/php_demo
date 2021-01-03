<?php

$con = mysqli_connect('localhost','root','','pract8');

$sql = "SELECT * FROM login";

$run = mysqli_query($con, $sql);

if($run== false ){
    echo"you are not  connected ";
} 


?>