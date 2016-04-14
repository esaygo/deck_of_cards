<?php

class Cards {
  public $suit;
  public $value;

  function __construct($suit,$value) {
    $this->suit=$suit;
    $this->value=$value;
  }

}

class Deck {
  public $suit;
  public $value;
  public $cards;

  function __construct(){
    $this->cards = [];
    $this->suit = ['hearts','spades','clubs','diamonds'];
    $this->values = ['Ace',2,3,4,5,6,7,8,9,10,'Jack','Quinn','King'];
    $this->build_deck($this->suit,$this->value);
  }

  function build_deck($suit,$value) {
    for($i=0; $i<count($suit); $i++) {
      for($j=0; $j<count($value); $j++) {
        $this->cards[] = new Cards($this->$suit[$i],$this->$value[$j]);
      }

    }
    return $this;
  }

  // function shuffle($cards) {
  //   shuffle($cards);
  //   return $this;
  //
  // }
  function reset() {

  }

  function deal() {
    //returns the dealt card and remove it from the deck
  }

}

$deck = new Deck();
var_dump($deck);

//
//
// $cards=[2,4,5,7,8];
// $test=shuffle($cards);
// var_dump($cards);
 ?>
