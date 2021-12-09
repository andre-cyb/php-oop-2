<?php



class PrimeUsers extends User{

    protected $shipping;
    protected $delivery;
    protected $specialOffer;



    function __construct($arrUser){
        parent::__construct($arrUser);
        $this->getUserPrime();
        
        
    }
    public function getUserPrime(){
        return parent::getUser();
    }

    public function getShipping(){
        return $this->shipping. "<br>";
    }
    public function getDelivery(){
        return $this->delivery."<br>";  
    }
    public function getSpecialOffer(){
        return $this->specialOffer."<br>";
    }


    protected function setUserPrime($arrUser){
        
            
            if(isset($arrUser["free-shipping"])){
                $this->shipping= $arrUser["free-shipping"];
            }
            if(isset($arrUser["one-day-delivery"])){
                $this->delivery= $arrUser["one-day-delivery"];
            }
            if(isset($arrUser["special-offer"])){
                $this->specialOffer= $arrUser["special-offer"];
            }
            
        
        
    }
}