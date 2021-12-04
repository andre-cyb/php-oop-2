<?php

class GardenProd extends Product{

    public $item = [
        "color"=> "",
        "size"=> "",
        "material"=>""
        
    ];

    function __construct($arrProd){
        parent::__construct($arrProd);
        $this->setGproduct($arrProd);
        
    }
    public function getGproduct(){
        return $this->getProduct(). 
        $this->item["color"]. "<br>". $this->item["size"]. "<br>". $this->item["material"]. "<br>";
    }

    public function setGproduct($arrProd){

        if(isset($arrProd["color"])){
            $this->item["color"]= $arrProd["color"];
        }
        if(isset($arrProd["size"])){
            $this->item["size"]= $arrProd["size"];
        }
        if(isset($arrProd["material"])){
            $this->item["material"]= $arrProd["material"];
        }
        
    }
}