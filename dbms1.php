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
	 $purchaseid = $_POST['purchaseid'];
	 $companyName = $_POST['companyName'];
	 $contactNumber = $_POST['contactNumber'];
	 $address = $_POST['address'];
	 $purchaseType = $_POST['purchaseType'];

	 $sql_query = "INSERT INTO purchase (purchaseid,companyName,contactNumber,address,purchaseType)
	 VALUES ('$purchaseid','$companyName','$contactNumber','$address','$purchaseType')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Stocks added.";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>