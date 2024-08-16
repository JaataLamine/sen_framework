<?php

namespace App\Core;

use Symfony\Component\VarDumper\VarDumper;

class App
{
  public function run()
  {
    var_dump($this->name);
    var_dump("run app");
  }
}