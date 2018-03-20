<?php

	include_once 'header.php'; 
?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Signup</h2>
			<form class="signup-form" action="include/signup.inc.php" method= "POST">
				
				<input type="text" name="uname" placeholder="UserName">
				<input type="text" name="contact" placeholder="ContactNumber">
				<input type="text" name="email" placeholder="E-mail">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Sign up</button>
			</form>

			
		</div>
		
	</section>

	<?php

	include_once 'footer.php'; 
?>