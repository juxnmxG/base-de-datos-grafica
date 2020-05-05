<?php

class estudiante
{
  public $id  = "";
  public $name = "";
  public $fecha = "";

  public function estudiante ($id, $name, $fecha)
  {
    $this->id = $id;
    $this->name = $name;
    $this->fecha = $fecha;
  }
}

?>
