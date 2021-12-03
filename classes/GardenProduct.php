<?php


class GardenProd extends Product{

    public $item = [
        "color"=> "",
        
    ];

    function __construct($arrProd){
        return $this->setGproduct($arrProd);
        
    }
    public function getGproduct(){
        return $this->item["title"]. "<br>".$this->item["price"]. "<br>".$this->item["description"]. "<br>". $this->item["color"]. "<br>";
    }

    public function setGproduct($arrProd){
        if(isset($arrProd["title"])){
            $this->item["title"]= $arrProd["title"];
        }
        if(isset($arrProd["price"])){
            $this->item["price"]= $arrProd["price"];
        }
        if(isset($arrProd["description"])){
            $this->item["description"]= $arrProd["description"];
        }

        if(isset($arrProd["title"])){
            $this->item["color"]= $arrProd["color"];
        }
        
    }
}