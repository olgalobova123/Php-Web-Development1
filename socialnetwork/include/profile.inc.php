<!DOCTYPE html>
<html>
<head>
	<title><?php echo $uname;?><?php echo $contact; ?><?php echo $email; ?> profile profile</title>
</head>
<body>

	<?php 

//check for a formsubmission
	if(isset($_POST['submit']))
	{
		include_once 'dbh.inc.php';

		$username=$_POST['username'];
		$userquery= mysqli_query($conn,"SELECT* FROM users WHERE Uname='$username'");
		//check if the username exist

		if(mysqli_num_rows($userquery)!=1){
			die("That username could not be found");
		}
		while($row=mysqli_fetch_assoc($userquery)){

			$uname=$row['Uname'];
			$contact=$row['ContactNo'];
			$email=$row['EmailID'];
			$pwd=$row['UPassword'];
			
	}	

	?>	

<h2><?php echo $uname;?> profile</h2><br/><br/>
<table>

	<tr><td>UserName:</td><td><?php echo $uname; ?></td></tr>
	<tr><td>Phone:</td><td><?php echo $contact; ?></td></tr>
	<tr><td>Email:</td><td><?php echo $email; ?></td></tr>
	


</table>

<?php

	}else die("You need to specify a username");

?>




</body>
</html>