<?php

 namespace \lampe\htmllib\Div;

require_once("Element.php");

class Div extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "div";
  }
}
