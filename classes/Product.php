<?php



class Product{

    public $item = [
        "title"=> "",
        "price"=> "",
        "description"=> ""
    ];


    function __construct($arrProd){
        return $this->setProduct($arrProd);
        
    }
    public function getProduct(){
        return $this->item["title"]. "<br>".$this->item["price"]. "<br>".$this->item["description"]. "<br>"/* .$this->img. "<br>" */;
    }

    public function setProduct($arrProd){
        if(isset($arrProd["title"])){
            $this->item["title"]= $arrProd["title"];
        }
        if(isset($arrProd["price"])){
            $this->item["price"]= $arrProd["price"];
        }
        if(isset($arrProd["description"])){
            $this->item["description"]= $arrProd["description"];
        }
        /* if(isset($arrProd["img"])){
            $this->item["title"]= $arrProd["img"];
        } */
        
    }



}