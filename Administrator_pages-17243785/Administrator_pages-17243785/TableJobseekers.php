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

$conn=new mysql($servername,$username,$password,$dbname );
//check connection 
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "connected successfully\n"
$sql="select*from Users;";
$result=$conn->query($sql);
while($row=$result->fetch-assoc())
{
print "{$row=["Uid"]}:{$row=["Uname"]}:{$row=["ContactNo"]}:{$row=["EmailID"]}:{$row=["UPassword"]}:{$row=["Type"]}:{$row=["Status"]}}\n";
}
$conn->close();
?>