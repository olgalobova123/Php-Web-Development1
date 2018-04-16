<?php

//create connection 
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
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
// if connected sucsessfully 
echo "Insert company ID<br> you want to delete :";
<br>
<input type="Submit">;
$input = rtrim(fgets(STDIN));
//sql to delete a record
$sql="DELETE * FROM Companies WHERE EXISTS ( SELECT Cid FROM Companies WHERE Cid=={$_GET["name"]})";

if($result=$conn->query($sql)===True)
{
echo "Company deleted successfully";
}

}
else
{
	echo "Error deleting record: " . $conn->error;
	
}
$conn->close();
?> 