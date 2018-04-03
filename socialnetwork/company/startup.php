<?php
require_once('db_fns.php');
session_start();



$connection = db_connect();
if($connection->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$sql = "select * from Users";
if ($result = $connection->query($sql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        // printf ("%s (%s)\n", $row["Uname"], $row["Uid"]);
        echo "Uid = ".$row["Uid"]." Uname = ".$row["Uname"]."</br>";
    }

    /* free result set */
   $result->free();
}
?>