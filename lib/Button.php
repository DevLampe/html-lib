<?php

 namespace \lampe\htmllib\Button;

require_once("Element.php");

class Button extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "button";
  }
}
