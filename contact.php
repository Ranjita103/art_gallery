<?php
session_start();
$conn = new mysqli("localhost","root","","art_gallery");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];

	$query="INSERT INTO contact_us(name,email,feedback) VALUES('$name','$email','$feedback')";
	$query_run=mysqli_query($conn,$query);
	
    if($query_run)
    {
      echo" <script type='text/javascript'>alert('Thanks For Your Feedback!');
        window.location=['index.php'];</script>";
    }
    else
    {
        echo"<script type='text/javascript'>alert('Please Enter your details properly!');
         window.location=['contactus.php']</script>";
    }
}
?>
