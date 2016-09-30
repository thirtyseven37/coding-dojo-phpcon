<?php
namespace App;
require_once('Place.php');
class Map {
  private $places;
  private $currentPosition;
  public function __construct ($x, $y){
    for($i=0 ; $i<$y; $i++ ){
      for($j=0 ; $j<$x; $j++){
        $this->places[$j][$i] = new \App\Place();
      }
    }
    $this->setPosition(0, 0);
  }

  private function setPosition ($x, $y)
  {
      $this->currentPosition = [$x, $y];
  }

  public function getPosition ()
  {
      return $this->currentPosition;
  }

  public function sizes(){
    // var_dump($this->places);
    return [sizeof($this->places), sizeof($this->places[0])];
  }

  public function getPlace($x, $y)
  {
    if (!array_key_exists($x, $this->places) || !array_key_exists($y, $this->places[$x])) {
      throw new \Exception('place does not exist in map');
    }

    return $this->places[$x][$y];
  }

  public function canGo($direction) {
    switch ($direction) {
      case 'north' : $dx = 0;
      //TODO
    }
  }
}
