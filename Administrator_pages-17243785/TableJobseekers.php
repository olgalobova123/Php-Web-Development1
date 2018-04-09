<?php
$servername="sql2.freemysqlhosting.net";
$username="sql2227196";
$password="cF1*jJ8*";
$dbname="sql2227196";
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