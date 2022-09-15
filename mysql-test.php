<?php

  $servername = "localhost";
  $username = "user";
  $password = "password";
  $dbname = "myDB";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO Records (field1, field2)
    VALUES ('field1', 'field2')";

  if(isset($_POST['Create'])) {
    if ($conn->query($sql) === TRUE) {
        echo "MySQL Connection Established";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>
