<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="plants";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $plantName = $_POST['plantName'];
	 $cost = $_POST['cost'];
	 $fullName = $_POST['fullName'];
	 $contactNumber = $_POST['contactNumber'];
	 $email = $_POST['email'];
	 $address = $_POST['address'];
	 $paymentMethod = $_POST['paymentMethod'];

	 $sql_query = "INSERT INTO myplant (plantName,cost,fullName,contactNumber,email,address,paymentMethod)
	 VALUES ('$plantName','$cost','$fullName','$contactNumber','$email','$address','$paymentMethod')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Order placed !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>