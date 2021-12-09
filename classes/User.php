<?php

include_once __DIR__ . "/../traits/PrimeServices.php";



class User{

    protected $name;
    protected $lastName;
    protected $age;
    protected $prime;
    protected $paymentMethods= "";
    

    use PrimeServices;


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

        // try catch error intercettato
        try {
            if(!is_numeric($arrUser["age"])){
                throw new Exception("L'età inserita non è un numero");  
            }else{
                $this->age= $arrUser["age"];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        if(!$arrUser["prime"]){
            $this->prime= "non utente prime";
        }else{
            return $this->getPrimePrivilege();
        }
        
    }
   /*  public function setPaymentMethod($card){
        $this->paymentMethods= $card;
    
    } */


    /* public function addPaymentMethod($card){
        $this->paymentMethods= $card;
    } */

    

}