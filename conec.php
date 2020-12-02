

<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$ppl = $_POST['ppl'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','t');
   
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
     }
 

		$sql ="insert into res(firstName, lastName, email, number, ppl) values('$firstName', '$lastName','$email','$number', '$ppl')";
		if (mysqli_query($conn, $sql)) {
      echo'<script>alert("Your table is booked")</script>';
      header('location: booked.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
		
      
	
?>