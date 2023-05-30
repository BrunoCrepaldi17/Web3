<?php
 namespace App\Models;

class ItemVenda{
private $item;

public function __get($atributo){
return $this ->$atributo;
}

public function __set($atributo, $valor){
    $this ->$atributo = $valor;
    }
}
