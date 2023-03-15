<?php

////Connecting to the database
$servername = "localhost";
$username="root";
$password = "";
$database = "users0";
////Create a connection
$conn = mysqli_connect($servername , $username , $password , $database);

////Die If connection was not successfull
if(!$conn){
    die("Sorry we failed to connect: " .mysqli_connect_error());
}

// else{
//     echo "<br>Connection was successful";
// }
?>