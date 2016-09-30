<?php

namespace  App;

class Place
{
  private $isAccessible;
  function __construct($isAccessible = true) {
    $this->isAccessible = $isAccessible;
  }
  public function accessible()
  {
    return $this->isAccessible;
  }
}
