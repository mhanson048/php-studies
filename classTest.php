<?php

namespace Studies\NS;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

class TestClass {
  public $index = 1;

  public function increment() {
    $this->index++;
  }

  public function getIndex() {
    return $this->index;
  }
}

?>
