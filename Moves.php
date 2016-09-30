<?php

namespace  App;

class Moves
{
  public function go($direction)
  {
    $result = '';

    switch ($direction) {
      case 's':
        $result = 'south';
        break;
      case 'n':
        $result = 'north';
        break;
      case 'e':
        $result = 'east';
        break;
      case 'w':
        $result = 'west';
        break;
      default:
        $result = 'unknown direction';
        break;
    }

    return $result;
  }
}
