<?php

namespace App\test;

use App\Map;

require_once('../Map.php');

class MapTest extends \PHPunit_Framework_Testcase
{
  function testCreateMap()
  {
    $map = new Map(5,5);
    $this->assertEquals($map->sizes(), array(5, 5));

    $map = new Map(6,5);
    $this->assertNotEquals($map->sizes(), array(5, 6));

    $map = new Map(5,6);
    $this->assertNotEquals($map->sizes(), array(5, 5));
  }

  function testGetPlace()
  {
    $map = new Map(2, 2);
    $place = $map->getPlace(1, 1);

    $this->assertTrue($place->accessible());
  }

  /**
 * @expectedException Exception
 */
  function testGetPlaceForException()
  {
    $map = new Map(2, 2);
    $map->getPlace(3, 3);
  }

  function testCreateAccesssibleMap()
  {
      $map = new Map(2, 2);
      for($i=0 ; $i<2; $i++ ){
        for($j=0 ; $j<2; $j++){
          $this->assertTrue($map->getPlace($i, $j)->accessible());
        }
      }

  }
  function testFirstPosition()
  {
    $map = new Map(2, 2);
    $this->assertEquals($map->getPosition(), [0, 0]);
  }

  function Go() {
    $map = new Map(2, 2);
    $this->assertFalse($map->canGo('north'));
    $this->assertFalse($map->canGo('west'));
    $this->assertTrue($map->canGo('south'));
    $this->assertTrue($map->canGo('east'));
  }
}
