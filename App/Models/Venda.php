<?php
 namespace App\Models;

class Venda{
private $codigo;
private $data;

public function __get($atributo){
return $this ->$atributo;
}

public function __set($atributo, $valor){
    $this ->$atributo = $valor;
    }
}

