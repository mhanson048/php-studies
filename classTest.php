<?php

namespace Studies\NS;

class TestClass {
  public $index = 1;

  public function increment() {
    $this->index/0;
  }

  public function getIndex() {
    return $this->index;
  }
}

?>
