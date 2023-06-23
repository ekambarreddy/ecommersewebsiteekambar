<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "APP");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fullame = $_POST['fullName'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phoneNumber = $_POST['phoneNumber'];
		$pwd = $_POST['pwd'];
		$gender= $_POST['gender'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO registers VALUES ('$fullame',
			'$username','$email','$phoneNumber','$pwd','$gender')";
		
		if(mysqli_query($conn, $sql)){
			echo "";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>