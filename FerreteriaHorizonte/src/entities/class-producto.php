<?php 


class Producto {
  public string $namep;
  public string $branchproduct;
  public string $descriptionp;
  public int $priceproduct;
  public int $stockproduct;


  public function __construct($namep, $branchproduct,
  $descriptionp,$priceproduct,$stockproduct) {
    $this->namep = $namep;
    $this->branch = $branchproduct;
    $this->description = $descriptionp;
    $this->price = $priceproduct;
    $this->stock = $stockproduct;
  }

  public function get_name() {  
    return $this->namep;
  }
  public function get_branch() {
    return $this->branch;
  }

  public function get_description() {
    return $this->description;
  }

  public function get_price() {
    return $this->price;
  }
  public function get_stock() {
    return $this->stock;
  }
}


    $producto = new Producto("tornillo","mundial","punta de estrella",200,500);
    echo  $producto ->get_name();
    echo "<br>";
    echo  $producto ->get_branch();
    echo "<br>";
    echo  $producto ->get_description();
    echo "<br>";
    echo  $producto ->get_price();
    echo "<br>";
    echo  $producto ->get_stock();
    echo "<br>";

?>