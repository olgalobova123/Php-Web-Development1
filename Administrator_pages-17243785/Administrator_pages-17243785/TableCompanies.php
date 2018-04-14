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
$sql="select*from Companies;";
$result=$conn->query($sql);
while($row=$result->fetch-assoc())
{
print "{$row=["Cid"]}:{$row=["Cname"]}:{$row=["Address"]}:{$row=["EmailID"]}:{$row=["ContactNo"]}:{$row=["Description"]}:{$row=["Uid"]}}\n";
}
$conn->close();
?> 