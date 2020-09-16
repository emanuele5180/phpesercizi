<?php
$servername =  "localhost";
$username =  "root";
$password =  "root";
$dbname = "dbhotel";


$conn = new mysqli( $servername,$username,$password,$dbname);

if ($conn && $conn->connect_error){
  echo "connection failed:".$conn->connect_error;
  return;
}
$sql = "
  SELECT status, SUM(price) as sum
  FROM pagamenti
  GROUP BY status
";
$result = $conn->query($sql);

//var_dump ($result);die();

if ($result && $result->num_rows >0) {
  while($row = $result->fetch_assoc()) {
             echo "pagamenti: " . $row['status'] . " " . $row['sum'] . '<br>';
         }
     } elseif ($result) {
         echo "0 results";
     } else {
         echo "query error";
     }
     $conn->close();
?>
