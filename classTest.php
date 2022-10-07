<?php

namespace Studies\Test;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

class TestC {
  public $index = 1;

  public function increment() {
    $this->index++;
  }

  public function getIndex() {
    return $this->index;
  }
}

?>
