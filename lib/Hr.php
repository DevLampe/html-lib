<?php

 namespace \lampe\htmllib\Hr;

require_once("Element.php");

class Hr extends Element
{
  public function __construct()
  {
    $this->tag = "hr";
  }
  public function __toString()
  {
    if($this->tag == '') {
      throw new Exception('Element tag is empty.');
    }
    $properties = '';
    foreach ($this->properties as $key => $value) {
      $properties .= "$key=\"$value\" ";
    }
    return "<$this->tag $properties>";
  }
}
