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
  use Studies\NS as nsst;

  $testClass = new nsst\TestClass;
  echo $testClass->getIndex();
  $testClass->increment();
  echo $testClass->getIndex().'<div>&nbsp;</div>';
  
  include "mysql-test.php";

?>
