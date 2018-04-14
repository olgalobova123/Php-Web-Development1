<?php
$servername="sql2.freemysqlhosting.net";
$username="sql2232420";
$password="sK2*pB6*";
$dbname="sql2232420";
$conn=new mysql($servername,$username,$password,$dbname );
//check connection 
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "connected successfully\n"


$conn->close();
?> 