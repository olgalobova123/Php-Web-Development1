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
// if connected successfully 
echo "Insert vacancy ID<br> you want to delete :";
<br>
<input type="Submit">
$input = rtrim(fgets(STDIN));
//sql to delete vacancy
$sql="DELETE * FROM Vacancies WHERE EXISTS (SELECT Uid FROM Vacancies WHERE Vid==.{$_GET["name"]})";

if($result=$conn->query($sql)){
{
echo "User deleted successfully";
}

}
else
{
	echo "Error deleting record: " . $conn->error;
	
}

$conn->close();
?> 