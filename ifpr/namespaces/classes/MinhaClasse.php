<?php
namespace classes;

class MinhaClasse
{
    public function __construct()
    {
        echo "Nova Instancia<br>";
    }
}
$instancia1 = new MinhaClasse();

$instancia2 = new \classes\MinhaClasse();

?>