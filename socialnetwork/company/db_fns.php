<?php

function db_connect() {
   $connection = new mysqli('sql2.freemysqlhosting.net', 'sql2227196', 'cF1*jJ8*', 'sql2227196');
   if (!$connection) {
       echo "Connect failed";
      return false;
   }
   else
   {
      // echo "connect successful"."</br>";
   }

   $connection->autocommit(TRUE);
   return $connection;
}



?>
