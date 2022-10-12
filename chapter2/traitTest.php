<?php

namespace Studies\NS;

trait TraitTest
{
  protected $ipAddress;

  public function setIP($ip)
  {
    $this->ipAddress = $ip;
  }

  public function getIP()
  {
    return $this->ipAddress;
  }
}

