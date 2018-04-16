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

echo "Insert User ID<br> you want to ban:";
<br>
<input type="Submit">
$input = rtrim(fgets(STDIN));
//sql to ban user
$sql = "UPDATE Users SET status='banned' WHERE Uid={$_GET["name"]})";
if($result=$conn->query($sql)){
{
echo "User baned successfully";
}

}
else
{
	echo "Error in ban user: " . $conn->error;
	
}
$conn->close();
?> 