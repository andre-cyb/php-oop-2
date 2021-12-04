<?php


class User{

    public $userData=
    [
        "name"=> "",
        "lastName"=> "",
        "età"=> null,
        "prime"=> null
    ];

    function __construct($arrUser){
        return $this->setUser($arrUser);
        
    }
    public function getUser(){
        return $this->userData["name"]. "<br>".
        "<p>".$this->userData["lastName"]. "</p>"."<br>".
        "<p>".$this->userData["età"]."</p>"."<br>".
        "<p>".$this->userData["prime"]."</p>"."<br>";
    }

    public function setUser($arrUser){
        
        if(isset($arrUser["name"])){
            $this->userData["name"]= $arrUser["name"];
        }
        if(isset($arrUser["lastName"])){
            $this->userData["lastName"]= $arrUser["lastName"];
        }
        if(isset($arrUser["età"])){
            $this->userData["età"]= $arrUser["età"];
        }
        if(!$arrUser["prime"]){
            $this->userData["prime"]= "non utente prime";
        }
        
    }

    

}