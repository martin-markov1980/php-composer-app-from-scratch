<?php

namespace Model;

class Person
{
  private $name;

  public function getName() :string
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

}