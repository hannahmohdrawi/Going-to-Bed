<?php
class StringUtils{
  public static function secondCase($string) {
    if(strlen($string) >= 2){
      $string[1] = strtoupper($string[1]);
    }else{
      $string = strtolower($string);
    }
  return $string;
  }
}


class Pajamas{
  private $owner, $fit, $color;
  function __construct($owner="sue", $fit = "fine", $color="orange"){
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }
  public function describe(){
    return "$this->owner owns these $this->color pajamas with $this->fit fit.\n";
  }
  public function setFit($new_fit){
    $this->fit = $new_fit;
  }
}

class ButtonablePajamas extends Pajamas{
  private $button_state = "unbuttoned";
  public function describe() {
    return parent::describe() . "They also have buttons which are currently $this->button_state.";
    }
  public function toggleButtons(){
    if($this->button_state === "unbuttoned"){
      $this->button_state = "buttoned";
    }else{
      $this->buttoned_state = "unbuttoned";
    }
  }
}



$chicken_PJS = new Pajamas("CHICKEN", "slim", "orange");
echo $chicken_PJS->describe();
echo "\n...they wash their PJs many times....\n";
$chicken_PJS->setFit("a little tight");
echo "\n";
echo $chicken_PJS->describe();

$moose_PJs = new ButtonablePajamas("moose", "loose", "blue");
$moose_PJs->toggleButtons();
echo $moose_PJs->describe();

?>