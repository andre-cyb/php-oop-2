<?php

class GardenProd extends Product{

    protected $color;
    protected $size;
    protected $material;

    function __construct($arrProd){
        parent::__construct($arrProd);
        $this->setGproduct($arrProd);
        
    }
    public function getGproduct(){
        return parent::getTitle().parent::getPrice().parent::getDescription(). 
        $this->color. "<br>". $this->size. "<br>". $this->material. "<br>";
    }

    protected function setGproduct($arrProd){

        if(isset($arrProd["color"])){
            $this->color= $arrProd["color"];
        }
        if(isset($arrProd["size"])){
            $this->size= $arrProd["size"];
        }
        if(isset($arrProd["material"])){
            $this->material= $arrProd["material"];
        }
        
    }
}