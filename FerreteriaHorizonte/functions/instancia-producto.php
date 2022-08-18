
<?php

require 'vendor/autoload.php';

$producto1 = new Producto ('taladro','dewalt','esto es un taladro',150000,30);
echo  $producto1 ->get_name();
echo "<br>";
echo  $producto1 ->get_branch();
echo "<br>";
echo  $producto1 ->get_description();
echo "<br>";
echo  $producto1 ->get_price();
echo "<br>";
echo  $producto1 ->get_stock();
echo "<br>";

?>