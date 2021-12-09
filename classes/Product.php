<?php

class Product{

    protected $title;
    protected $price;
    protected $description;


    function __construct($arrProd){
        return $this->setProduct($arrProd);
        
    }
    /* public function getProduct(){
        return $this->title. "<br>".
        "<p>".$this->price. "</p>"."<br>".
        "<p>".$this->description."</p>". 
        "<br>";
    } */
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDescription(){
        return $this->description;
    }

    protected function setProduct($arrProd){
        if(isset($arrProd["title"])){
            $this->title= $arrProd["title"];
        }
        if(isset($arrProd["price"])){
            $this->price= $arrProd["price"];
        }
        if(isset($arrProd["description"])){
            $this->description= $arrProd["description"];
        }
        /* if(isset($arrProd["img"])){
            $this->item["title"]= $arrProd["img"];
        } */
        
    }

}  