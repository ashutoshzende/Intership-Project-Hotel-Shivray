<html>
    <body>
<button onclick="closeWin()">Close "myWindow"</button>

<script>
let myWindow;
function closeWin() {
  myWindow.close();
}
</script>
</body>

<?php
header('content-type: application/json');

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "android";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `my`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){
  

    while($row = mysqli_fetch_assoc($result)){
         echo var_dump($row);
      
        echo "<br>";
    }


}
?>
