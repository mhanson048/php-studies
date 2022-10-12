<?php

namespace Studies\NS;

include "traitTest.php";

class TestClass
{
  use TraitTest;

  public $index = 1;

  public function increment()
  {
    $this->index++;
  }

  public function getIndex()
  {
    return $this->index;
  }
}

