<?php

include "classes/Product.php";
include "classes/GardenProduct.php";
include "data/product-data.php";

echo "<ul>";
foreach ($products as $product) {
    $item= new Product($product);
    echo "<li>".$item->getProduct()."</li>";
}
echo "</ul>";
/* var_dump($gardenProducts);
*/


echo "<ul>";
foreach ($gardenProducts as $gProduct) {
    $gardenItem= new GardenProd($gProduct);
    echo "<li>".$gardenItem->getGproduct()."</li>";
}
echo "</ul>";


