<?php

$connection = new mysqli("localhost", "root", "", "crud");

// if($connection) {
//     echo "Conneciton Established"; 
// }  else{

//     die(mysqli_error($connection)); 
// }

if(!$connection) {
    die(mysqli_error($connection)); 
}
?>