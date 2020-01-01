<?php

class Calculate{
    public $inputOne;
    public $inputTwo;

    public function __construct($a, $b){
        $this->inputOne = $a;
        $this->inputTwo = $b;
    }

    public function addition(){
        $result = $this->inputOne + $this->inputTwo;
        return $result;
    }

    public function substraction(){
        $result = $this->inputOne - $this->inputTwo;
        return $result;
    }

    public function multiplication(){
        $result = $this->inputOne * $this->inputTwo;
        return $result;
    }
    
    public function division(){
        $result = $this->inputOne / $this->inputTwo;
        return $result;
    }
}
?>