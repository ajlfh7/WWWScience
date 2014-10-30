<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<!-- Reference: http://www.w3schools.com/html/html_forms.asp -->
	<form action="#" method="POST">
		<!-- Text Input -->
		<div>
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="fname" placeholder="First Name">
		</div>
		<div>
			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lname" placeholder="Last Name">
		</div>
		<div>
			<label for="email">Email Address:</label>
			<input type="text" id="email" name="email" placeholder="Email Address">
		</div>
		<div>
			<label for="email">Major:</label>
			<input type="text" id="major" name="major" placeholder="Major">
		</div>
		<div>
			<label for="email">Grad Date:</label>
			<input type="text" id="graddate" name="graddate" placeholder="i.e. December 2015">
		</div>
		<div>
			<label for="email">Employment Type:</label>
			<input type="text" id="etype" name="etype" placeholder="i.e. Full Time">
		</div>
		

		
			<!-- Submit -->
		<div>
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>		

			
		
		<?php
			
			if (isset($_POST['submit'])) {

				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$major = $_POST['major'];
				$graddate = $_POST['graddate'];
				$etype = $_POST['etype'];

	
				$fullname = "".$fname." ".$lname."";
				
				
				echo '<center><img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=Name: = '.$fullname.'
				, Email: = '.$email.'
				, Major: = '.$major.'
				, Graduation Date: = '.$graddate.'
				, Employment Type: = '.$etype.'
				&choe=UTF-8"/><center>';

			}	
			
			?>

</body>
</html>		
