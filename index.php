<?php

include "classes/Product.php";
include "classes/GardenProduct.php";
include "classes/User.php";
include "classes/PrimeUser.php";
include "data/product-data.php";
include_once "data/user-data.php";

/* echo "<ul>";
foreach ($products as $product) {
    $item= new Product($product);
    echo "<li>".$item->getProduct()."</li>";
}
echo "</ul>";



echo "<ul>";
foreach ($gardenProducts as $gProduct) {
    $gardenItem= new GardenProd($gProduct);
    echo "<li>".$gardenItem->getGproduct()."</li>";
}
echo "</ul>"; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <h1>giardinaggio</h1>
            <div class="row ">

                <?php 
                    foreach ($gardenProducts as $gProduct) {
                        $gardenItem= new GardenProd($gProduct);
                    /*  echo "<li>".$gardenItem->getGproduct()."</li>"; */
                    
                ?>
                    <div class="card col-3  " style="width: 18rem;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <?php echo $gardenItem->getGproduct() ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <h1>general</h1>
            <div class="row ">

                <?php 
                    foreach ($products as $product) {
                        $item= new Product($product);
                    /*  echo "<li>".$gardenItem->getGproduct()."</li>"; */
                    
                ?>
                    <div class="card col-3" style="width: 18rem;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <?php echo $item->getProduct() ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <h1>Utenti non prime</h1>
            <div class="row ">

                <?php 
                    foreach ($users as $user) {
                        $user= new User($user);
                    /*  echo "<li>".$gardenItem->getGproduct()."</li>"; */
                    
                ?>
                    <div class="card col-3" style="width: 18rem;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <?php echo $user->getUser() ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <h1>Utenti prime</h1>
            <div class="row ">

                <?php 
                    foreach ($users as $user) {
                        $primeUser= new User($user);
                    
                ?>
                    <div class="card col-3" style="width: 18rem;">
                        <div class="card-body">
                            <?php echo $primeUser->getUserPrime() ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            
        </div>
    </main>
    <footer></footer>
    
</body>
</html>


