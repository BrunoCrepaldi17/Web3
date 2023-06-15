<?php
require 'vendor/autoload.php';

$titulo = 'Produto Incrível com Várias Cores Disponíveis';
$slugifier = new Slug\Slugifier();
$slug = $slugifier->slugify($titulo);

echo "<p>Título original: {$titulo}</p>";
echo "<p>URL do produto (slug) : {$slug}</p>";
?>