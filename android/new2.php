<html>
    <head>
        <title>SHOW RECORDS</title>
        <!-- <button onclick="closeWin()">Close "myWindow"</button> -->

<script>
let myWindow;
function closeWin() {
    if(confirm("Do you want to close the window ?")){
                    window.history.back();
                }
//   myWindow.close();
window.close();
}
</script>
    </head>

    <body>
        <table border="2" style="width: 40%; float:left;">
    <tr>
        <th>Invoice No.</th>
        <th>Mobile No.</th>
        <th>Customer Name.</th>

        <th>Dish </th>
        <th>Price </th>
        <th>Quntity </th>
        <th>Total Bill</th>
    </tr>



<?php
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
    echo "All Records Are Here...<br>";
}
$query="SELECT * FROM my";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['invoiceNo']."</td>
        <td>".$result['mobileNo']."</td>
        <td>".$result['cust']."</td>
       
        <td>".$result['dish']."</td>
        <td>".$result['price']."</td>
        <td>".$result['qty']."</td>
        <td>".$result['total']."</td>
       </tr>
      ";
        
    }
}

else{
    echo "No record Found";
}
// $rows=array();
// while($row=mysqli_fetch_assoc($_result))
// {
//     $rows[]=$row;
// }
// echo json_encode($rows);
// mysqli_close($conn);

?>
        <button onclick="closeWin()">Close "myWindow"</button>
