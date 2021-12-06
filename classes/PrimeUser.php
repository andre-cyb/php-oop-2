<?php

class PrimeUsers extends User{

    public $primeUserData= [
        "shipping"=> "Free Shipping",
        "delivery"=> "One day delivery",
        "special-offer"=> "Special Offer",
    ];


    /* function __construct($arrUser){
        parent::__construct($arrUser);
        $this->getUserPrime();
        
    } */
    public function getUserPrime(){
        if(!$this->userData["prime"] === true){
            return parent::getUser(). $this->primeUserData["shipping"]. "<br>".
            "<p>".$this->primeUserData["delivery"]. "</p>"."<br>".
            "<p>".$this->primeUserData["special-offer"]."</p>"."<br>";
        }

        
    }


    public function setUserPrime($arrUser){
        if($this->userData["prime"]){
            
            /* if(isset($arrUser["free-shipping"])){
                $this->primeUserData["free-shipping"]= $arrUser["free-shipping"];
            }
            if(isset($arrUser["one-day-delivery"])){
                $this->primeUserData["one-day-delivery"]= $arrUser["one-day-delivery"];
            }
            if(isset($arrUser["special-offer"])){
                $this->primeUserData["special-offer"]= $arrUser["special-offer"];
            }
             */
        }
        
    }
}