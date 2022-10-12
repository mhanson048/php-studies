<?php

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);

  include "classTest.php";
  use Studies\NS as nsst;

  // Class & Method
  $testClass = new nsst\TestClass;
  echo 'Before increment: '.$testClass->getIndex().'<br />';
  $testClass->increment();
  echo 'After increment:'.$testClass->getIndex().'<br />';

  $testClass->setIP('1.1.1.1');
  echo 'Trait test: '.$testClass->getIP();
  echo '<div>&nbsp;</div>';

  include "closureTest.php";
  use Studies\ClosureTest as ct;
  echo $closure('Test Passed').'<br />';
  echo 'Array Map Callback: ';
  print_r($numbersPlusOne);

  $bandClosure = ct\encloseBand('Periphery');
  echo '<div>&nbsp;</div>';
  echo 'Closure State: '.$bandClosure('Excellent');

  include "bindToTest.php";
  use Studies\ClosCallback as cc;
  $closCallback = new cc\ClosureClass();
  $closCallback->addRoute('/users/Josh', function() {
    $this->responseContentType = 'application/json;charset=utf8';
    $this->responseBody = '<div>{name: Josh}</div>';
  });
  //$closCallback->dispatch('/users/Josh');

?>
