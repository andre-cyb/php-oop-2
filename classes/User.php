<?php


class User{

    public $name;
    public $lastName;
    public $age;
    public $prime;
    public $paymentMethods= "";
    

    function __construct($arrUser){
        return $this->setUser($arrUser); 
    }

    protected function getUser(){
        return  $this->getName().
                $this->getLastName().
                $this->getAge().
                $this->getPrime();
                /* $this->getPaymentMethod($card); */
    }



    public function getName(){
        return $this->name. "<br>";  
    }
    public function getLastName(){
        return 
        $this->lastName."<br>";  
    }
    public function getAge(){
        return $this->age."<br>";  
    }
    public function getPrime(){
    /*  if(!$this->userData["prime"] === false){    
        } */
        return $this->prime."<br>";
    }
    public function getPaymentMethod($card){
        $this->paymentMethods= $card;

        return $this->paymentMethods. "<br>";  
    }



    public function setUser($arrUser){
        
        if(isset($arrUser["name"])){
            $this->name= $arrUser["name"];
        }
        if(isset($arrUser["lastName"])){
            $this->lastName= $arrUser["lastName"];
        }
        if(isset($arrUser["age"])){
            $this->age= $arrUser["age"];
        }
        if(!$arrUser["prime"]){
            $this->prime= "non utente prime";
        }
        
    }
   /*  public function setPaymentMethod($card){
        $this->paymentMethods= $card;
    
    } */


    /* public function addPaymentMethod($card){
        $this->paymentMethods= $card;
    } */

    

}