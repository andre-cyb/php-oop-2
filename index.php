<?php

include "classes/Product.php";
include "classes/GardenProduct.php";
include "data/product-data.php";
$products= [
    [
        "title"=> "Echo (4th Gen, 2020 release)",
        "price"=> 59.99,
        "description"=> "Make your life easier at home. Set timers, ask questions, 
        add items to lists, and create calendar events and reminders. Check the 
        traffic and weather, or play the news. Access tens of thousands of Alexa 
        skills. You can even bring new life to game night with Song Quiz, Jeopardy!, 
        Common Knowledge, and more."
    ],
    [
        "title"=> "Ratchet & Clank: Rift Apart - PlayStation 5",
        "price"=> 41.99,
        "description"=> "The intergalactic adventurers are back with Ratchet 
        & Clank: Rift apart. Help them stop a robotic Emperor intent on conquering 
        cross-dimensional worlds, with their own universe next in line."
    ],
    [
        "title"=> "RESPAWN RSP-110 Racing Style Gaming, Reclining Ergonomic Chair with Footrest, Green",
        "price"=> 135.99,
        "description"=> " A racecar-style gaming chair that provides luxury and comfort, whether 
        it's used for intense gaming sessions and climbing to the top of the leaderboards, or long work days. "
    ],
];

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


