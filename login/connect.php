<?php 

$myConnection= mysqli_connect("localhost", "root", "", "mydb") or die ("could not connect to mysql"); 

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}   

?>