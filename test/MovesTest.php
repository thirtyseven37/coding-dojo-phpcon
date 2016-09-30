<?php

namespace App\test;

require_once('./../Moves.php');

class MovesTest extends \PHPunit_Framework_Testcase
{
  function testGoBasicDirections()
  {
    $input = 'n';

    $moves = new \App\Moves();
    //$reaction = $moves->go($input);
    //$this->assertTrue($input === 'n' && $reaction === 'north', 'n is not north');
    $this->assertEquals($moves->go('s'),'south');
    $this->assertEquals($moves->go('n'),'north');
    $this->assertEquals($moves->go('e'),'east');
    $this->assertEquals($moves->go('w'),'west');
    $this->assertEquals($moves->go('rr'),'unknown direction');
  }

}
