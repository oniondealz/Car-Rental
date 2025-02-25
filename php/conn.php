<?php
echo "Connection with dbs<br/>";

// Connecting to dbs
$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = mysqli_connect($servername, $username, $password);


// Die if connection was not successfull
if (!$conn) {
    error_log("Sorry we failed to connect with dbs ". mysqli_connect_error());
} else {
    echo "Connection was Successfull " ;
}
?>