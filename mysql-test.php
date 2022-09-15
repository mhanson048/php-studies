<?php

  $servername = "localhost";
  $username = "user";
  $password = "password";
  $dbname = "myDB";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
  }

  $selectRecords = "Select * From Records";

  $records = $conn->query($selectRecords);
  if ($records->num_rows > 0) {
    while ($row = $records->fetch_assoc()) {
      $recordRow = "id: " . $row["id"] . " - field1: ";
      $recordRow .= $row["field1"] . " - field2: ";
      $recordRow .= $row["field2"] . " ";

      $recordRow .= '<form method="post" style="display:inline-block;">';
      $recordRow .= '<input type="submit" name="Delete" value="' . $row["id"] . '" />';
      $recordRow .= '</form>' . '<br>';
      echo $recordRow;
    }
  }

  $createRecords = "INSERT INTO Records (field1, field2)
    VALUES ('field1', 'field2')";

  if(isset($_POST['Create'])) {
    if ($conn->query($createRecords) === TRUE) {
        echo "MySQL Connection Established";
    } else {
        echo "Error: " . $createRecords . "<br>" . $conn->error;
    }
  }

  $deleteRecord = 'Delete From Records Where id = ';

  #var_dump($_POST['Delete'])
  if(isset($_POST['Delete'])) {
    if ($conn->query($deleteRecord . $_POST['Delete']) === TRUE) {
        echo "Record Deleted";
    } else {
        echo "Error: " . $deleteRecords . "<br>" . $conn->error;
    }
  }

?>
