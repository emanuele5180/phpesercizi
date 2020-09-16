<?php
    function getConnection($servername = "localhost",
                           $username = "guybrush",
                           $password = "code",
                           $dbname = "dbhotel") {
       $conn = new mysqli($servername, $username, $password, $dbname);
       if ($conn && $conn->connect_error) {
           echo "Connection failed: " . $conn->connect_error;
           return;
       }
       return $conn;
    }
    function insertPaganti($conn) {
        $status = $_POST['status'];
        $price = $_POST['price'];
        $prenotazione_id = $_POST['prenotazione_id'];
        $pagante_id = $_POST['pagante_id'];
        // echo
        //       "status: " . $status . "<br>"
        //     . "price: " . $price . "<br>"
        //     . "prenotazione_id: " . $prenotazione_id . "<br>"
        //     . "pagante_id: " . $pagante_id . "<br>";
        // die();
        $sql = "
            INSERT INTO pagamenti (status, price,
                                    prenotazione_id, pagante_id)
            VALUES (?, ?, ?, ?)
        ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("sdii",
                            $status, $price,
                            $prenotazione_id, $pagante_id);
        $result = $stmt -> execute();
        return $result;
    }
    function printResult($result) {
        if ($result && $result -> num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row['name'] . " " . $row['lastname'] . " " . $row['count'] . "<br>";
            }
        } elseif ($result) {
            echo "0 results";
        } else {
            echo "query error";
        }
    }
    $conn = getConnection();
    $result = insertPaganti($conn);
    printResult($result);
    $conn->close();
