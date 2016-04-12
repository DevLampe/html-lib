<?php

 namespace \lampe\htmllib\h1;

require_once("Element.php");

class H1 extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "h1";
  }
}
