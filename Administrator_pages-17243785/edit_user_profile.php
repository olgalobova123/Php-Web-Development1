<?php
require_once('db_fns.php');
session_start();



$connection = db_connect();
if($connection->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$sql = "select * from Usersa";
if ($result = $connection->query($sql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        // printf ("%s (%s)\n", $row["Uname"], $row["Uid"]);
        echo "Uid = ".$row["Uid"]." Uname = ".$row["Uname"]."</br>";
    }

    /* free result set */
   /*$result->free();*/
}

function getCompanyInfo($conn)
{
  $sql = "select * from Users where Uid=1";
  if ($result = $conn->query($sql)) {

    /* fetch associative array */
    /*while ($row = $result->fetch_assoc()) {
        // printf ("%s (%s)\n", $row["Uname"], $row["Uid"]);
        echo "Uname = ".$row["Uname"]." Address = ".$row["Address"]

        ."</br>";
    }*/

    $row = $result->fetch_assoc();

    /* free result set */
   $result->free();
   return $row;
}
}
?>


