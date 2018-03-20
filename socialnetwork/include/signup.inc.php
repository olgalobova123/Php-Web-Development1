<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';
	//To avoid code to be inserted in the signup field
	$uname=mysqli_real_escape_string($conn, $_POST['uname']);
	$contact=mysqli_real_escape_string($conn, $_POST['contact']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);

	// Errors handlers
	//Check for empty field
	if(empty($uname) || empty($contact) || empty($email) || empty($pwd)){
		//go back to the signup page
	header("Location: ../signup.php?signup=empty");
	exit();//To stop the script from running

	}else{
		//Check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $uname) || !preg_match("/^[0-9]*$/", $contact)){
			//go back to the signup page
			header("Location: ../signup.php?signup=invalid");
			exit();//To stop the script from running

		}else{
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=invalidemail");
				exit();

			}else{
				//Check if user name already exist
				$sql="SELECT * FROM Users WHERE uname='$uname'";
				$result=mysqli_query($conn, $sql);
				$resultcheck=mysqli_num_rows($result);

				if($resultcheck>0){
					header("Location: ../signup.php?signup=usertaken");
					exit();
				}else{
					//Hashing the password
					$hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
					//Insert user into the database
					$sql="INSERT INTO users(Uname,ContactNo,EmailID,Password) VALUES('$uname','$contact','$email','$hashedpwd');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();


				}
			}

		}

	}

}else{
	//go back to the signup page
	header("Location: ../signup.php");
	exit();//To stop the script from running
}