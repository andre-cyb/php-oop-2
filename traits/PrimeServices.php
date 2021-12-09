<?php

trait PrimeServices {
    protected $primeVideo= "Prime video compreso";
    protected $primeMusic= "Prime music compreso";

    public function getPrimePrivilege(){
        return  $this->primeVideo. "<br>".$this->primeMusic;
    }

}