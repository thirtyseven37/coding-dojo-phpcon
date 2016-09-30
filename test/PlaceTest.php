<?php

namespace App\test;

require_once('./../Place.php');

class PlaceTest extends \PHPunit_Framework_Testcase
{
  function testPlace()
  {
    $place = new \App\Place(true);
    $this->assertTrue($place->accessible());

    $place = new \App\Place(false);
    $this->assertFalse($place->accessible());
  }

}
