<html>
    <head>
        <title>Analysis RECORDS</title>

        <script>
            function window_close_onclick(){
                if(confirm("Do you want to close the window ?")){
                    window.close();
                }
            }
            </script>
    </head>
    <a href="javascript:window_close_onclick();">Close the browser window! </a>

    <body>
    <!-- <a href="javascript:window_close_onclick();">Close the browser window! </a> -->

        <table border="2" style="width: 40%; float:left;">
    <tr>
       

        <th>Dish </th>
       
        <th>Quntity </th>
    
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
    echo "Connection was successful<br>";
}
$query="SELECT dish, SUM(qty)FROM my GROUP BY dish";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    while($row=mysqli_fetch_assoc($data))
    { ?>
       <tr>
          <td><?php echo $row['dish'] ?></td>
          <td><?php echo  $row['SUM(qty)']?></td>
    </tr>
    <?php
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