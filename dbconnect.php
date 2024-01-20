<?php
//create contact with database
$conn = new mysqli("localhost", "anis0022", "TrollHattan!1", "anis0022");

//make sure connection works
if (mysqli_connect_error()) {
    printf("DB error: %s", mysqli_connect_error());
    exit();
}
?>