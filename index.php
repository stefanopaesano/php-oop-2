<?php


require_once __DIR__.'/nuovoprodotto.php';

class Product {
    public $IDdelprodotto;
    public $name;
    public $description;
    public $price;
    public $categories;

    public function __construct($IDdelprodotto, $name, $description, $price, $categories) {
        $this->IDdelprodotto = $IDdelprodotto;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->categories = $categories;
    }

    public function get_info() {
        return 'ID del prodotto: ' . $this->IDdelprodotto . '<br>' . 
               'Nome: ' . $this->name . '<br>' . 
               'Descrizione: ' . $this->description . '<br>' . 
               'Prezzo: ' . $this->price . '<br>' . 
               'Categorie: ' . $this->categories;
               
    }
}



$nuovoprodotto1 = new nuovoprodotto("i748ap9", "Cuccia per cani", "Cuccia imbottita per cani di taglia media", 49.99, "Cani", '10%');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>



<div class="card" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.6UTDi1DQib__B_6qZ04j4AHaHa?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">cuccia per cani</h2>

    <?php
    $product1 = new nuovoprodotto("i748ap9", "Cuccia per cani", "Cuccia imbottita per cani di taglia media", 49.99, "Cani", '10%');

    $products = array($product1, $product2);

        
        foreach ($products as $product) {
          echo $product->get_info() . '<br>';
        }
    ?>
    
  </div>
</div>
    
</body>
</html>
