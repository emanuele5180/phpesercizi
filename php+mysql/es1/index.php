<?php


  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "dbhotel";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if ($conn && $conn->connect_error) {
    echo "connection failed:".$conn->connect_error;
    return;
  }

  $sql = "
  SELECT name, lastname
  FROM paganti
  ";

  $result = $conn->query($sql);

  if ($result && $result->num_rows >0) {
    $row = $result->fetch_assoc();
    while($row) {


      echo "paganti:". $row['name'] . " " . $row['lastname'] . '<br>';
      $row = $result->fetch_assoc();
    }

    //VERSIONE2
    // while($row = $result->fetch_assoc()) {
    //         echo "ospite: " . $row['name'] . " " . $row['lastname'] . '<br>';
    //     }
    // } elseif ($result) {
    //     echo "0 results";
    // } else {
    //     echo "query error";
    // }
    // $conn->close();

  }



 ?>
