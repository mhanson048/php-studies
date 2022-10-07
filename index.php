<form method="post">
  <label>
    Field 1
  </label>
  <input type="text" name="field1" />

  <label>
    Field 2
  </label>
  <input type="text" name="field2" />
  
  <input type="submit" name="Create" value="Create" />
</form>

<?php

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);

  include "classTest.php";
  use Studies\Test\TestC as ct;

  $test = new ct;
  echo $test->getIndex();
  $test->increment();
  echo $test->getIndex();
  
  include "mysql-test.php";

?>
