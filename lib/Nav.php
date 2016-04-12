<?php

 namespace \Nicolas\htmllib\Nav;

require_once("Element.php");

class Nav extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "nav";
  }
}
