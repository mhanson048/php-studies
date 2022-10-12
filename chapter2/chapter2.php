<?php

  include "classTest.php";
  use Studies\NS as nsst;

  // Class & Method
  $testClass = new nsst\TestClass;
  echo 'Before increment: '.$testClass->getIndex().'<br />';
  $testClass->increment();
  echo 'After increment:'.$testClass->getIndex().'<br />';

  $testClass->setIP('1.1.1.1');
  echo $testClass->getIP();
  echo '<div>&nbsp;</div>';

  include "closureTest.php";
  use Studies\ClosureTest as ct;
  echo $closure('Test Passed').'<br />';
  print_r($numbersPlusOne);

  $bandClosure = ct\encloseBand('Periphery');
  echo '<div>&nbsp;</div>';
  echo $bandClosure('Excellent');

?>
