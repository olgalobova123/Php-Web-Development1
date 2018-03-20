<?php
//Starting the session
session_start();
if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';
	//To avoid malicious code to be inserted in the signup field
	$uname=mysqli_real_escape_string($conn, $_POST['uname']);
	$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);
	// Errors handlers
	//Check if inputs are empty
	if(empty($uname) || empty($pwd))
	{
		header("Location: ../index.php?login=empty");
		exit();
	}else{
		$sql="SELECT * FROM Users WHERE Uname='$uname' OR EmailID='$uname'";
		$result=mysqli_query($conn, $sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck<1){
			header("Location: ../index.php?login=error");
			exit();

		}else{
			if($row=mysqli_fetch_assoc($result)){
				//De-hashing the password
				$hashedpwdcheck=password_verify($pwd, $row['UPassword']);
				if($hashedpwdcheck==false){
					header("Location: ../index.php?login=error");
					exit();

				}elseif ($hashedpwdcheck==true) {
					//log in the user here
					$_SESSION['u_id']=$row['Uid'];
					$_SESSION['u_name']=$row['Uname'];
					$_SESSION['u_contact']=$row['ContactNo'];
					$_SESSION['u_email']=$row['EmailID'];
					$_SESSION['u_password']=$row['UPassword'];
					header("Location: ../index.php?login=success");
					exit();
				}

			}
		}
	}

}else{
	//go back to the signup page
	header("Location: ../index.php?login=error");
	exit();//To stop the script from running
}


