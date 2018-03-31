<?php

function db_connect() {
   $connection = new mysqli('sql2.freemysqlhosting.net', 'sql2227196', 'cF1*jJ8*', 'sql2227196');
   if (!$connection) {
      echo "Connect failed";
      return false;
   }
   else
   {
      echo "connect successful"."</br>";
   }

   $connection->autocommit(TRUE);
   return $connection;
}



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
