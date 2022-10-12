<style>
  .recordTable {
    border-collapse: collapse;
  }

  .recordTable td, th {
    border: thin solid lightgray;
    padding-left: 10px;
    padding-right: 10px;
  }

  .recordTable form {
    margin: 0;
  }

  .fieldForm {
    padding-top: 20px;
  }

  .field2 {
    padding-left: 20px;
  }
</style>

<div>&nbsp;</div>

<form class="fieldForm" method="post">
  <label>
    Field 1
  </label>
  <input type="text" name="field1" />

  <label class="field2">
    Field 2
  </label>
  <input type="text" name="field2" />
  
  <input type="submit" name="Create" value="Create" />
</form>

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

  $query = array();
  while ($query[] = mysqli_fetch_assoc($records));
  array_pop($query);

  echo "<table class='recordTable'>";
  echo "<tr>";
  foreach ($query[0] as $key => $value) {
    echo "<th>";
    echo $key;
    echo "</th>";
  }
  echo "<th>Delete</th>";
  echo "</tr>";

  foreach ($query as $row) {
    echo "<tr>";
    foreach ($row as $column) {
      echo "<td>";
      echo $column;
      echo "</td>";
    }
    echo "<td>";
    echo '<form method="post" style="display:inline-block;">';
    echo '<input type="hidden" name="DeleteVal" value="' . $row["id"] . '" />';
    echo '<input type="submit" name="Delete" value="Delete" />';
    echo '</form></td>';
    echo "</tr>";
  }
  echo "</table>";

  if(isset($_POST['Create'])) {
    echo $_POST['field1'];
    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    $createRecords = "INSERT INTO Records (field1, field2)";
    $createRecords .= "VALUES ('" . $field1 . "', '" . $field2 . "')";

    if ($conn->query($createRecords) === TRUE) {
        echo "MySQL Connection Established";
    } else {
        echo "Error: " . $createRecords . "<br>" . $conn->error;
    }
  }

  if(isset($_POST['Delete'])) {
    $deleteRecord = 'Delete From Records Where id = ';
    if ($conn->query($deleteRecord . $_POST['DeleteVal']) === TRUE) {
        echo "Record Deleted";
    } else {
        echo "Error: " . $deleteRecords . "<br>" . $conn->error;
    }
  }

?>
