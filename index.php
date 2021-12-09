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
<body style="background-color: #3B3B3B; color: white">
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
                    <div class="card col-3  " style="width: 18rem; background-color: #1A1A1A">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <?php echo "<h3>".$gardenItem->getTitle()."</h3>" ?>
                            <?php echo "<small>". "$".$gardenItem->getPrice()."</small>" ?>
                            <?php echo "<p>".$gardenItem->getDescription()."</p>" ?>
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
                    <div class="card col-3" style="width: 18rem; background-color: #1A1A1A">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <?php 
                                echo "<h3>".$item->getTitle()."</h3>" ;
                                echo "<small>". "$".$item->getPrice()."</small>"; 
                                echo "<p>".$item->getDescription()."</p>" ;
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <h1>Utenti</h1>
            <div class="row ">

                <?php 
                    foreach ($users as $utente) {
                        $user= new User($utente);
                    /*  echo "<li>".$gardenItem->getGproduct()."</li>"; */
                    
                ?>
                    <div class="card col-3" style="width: 18rem; background-color: #1A1A1A">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <?php 
                                echo "<h3>".$user->getName()."</h3>" ;
                                echo "<h4>".$user->getLastName()."</h4>"; 
                                echo "<p>".$user->getAge()."</p>" ;
                                echo "<small>metodo pagamento: ".$user->getPaymentMethod("carta di credito")."</small>" ;
                                echo "<small>".$user->getPrime()."</small><br>" ;
                                if($utente["prime"]===true){
                                    echo "<small>". $user->getPrimePrivilege()."</small>" ;
                                } else{
                                    
                                }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- <h1>Utenti prime</h1> -->
            <div class="row ">

                <?php 
                    /* foreach ($users as $user) {
                        $primeUser= new PrimeUsers($user); */
                    
                ?>
                    <!-- <div class="card col-3" style="width: 18rem; background-color: #1A1A1A">
                        <div class="card-body">
                            <?php echo "<small>".$user->getUserPrime()."</small>" ?>
                            <?php echo "<small>".$user->getShipping()."</small>" ?>
                            <?php echo "<small>".$user->getDelivery()."</small>" ?>
                            <?php echo "<small>".$user->getSpecialOffer()."</small>" ?>
                        </div>
                    </div> -->
                <?php
                /* } */
                ?>
            </div>
            
        </div>
    </main>
    <footer></footer>
    
</body>
</html>


