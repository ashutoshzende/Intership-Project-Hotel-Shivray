<?php
$servername = "localhost";
$database = "android";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


$mobileNo = $_POST['mobileNo'];
$dish=$_POST['dish'];
$qty=$_POST['qty'];
$cust=$_POST['cust'];
$price=$_POST['price'];
$total=$_POST['total'];
// $adddish=$_POST['adddish'];
// $addqty=$_POST['addqty'];
echo $mobileNo;

$sql = "INSERT INTO my (`mobileNo`,`dish`,`qty`,`cust`,`price`,`total`) VALUES ('$mobileNo','$dish','$qty','$cust','$price','$total')";

// $sql = "INSERT INTO my (`mobileNo`,`dish`,`qty`,`cust`,`price`,`total`,`adddish`,`addqty`) VALUES ('$mobileNo','$dish','$qty','$cust','$price','$total','$adddish','$addqty')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>