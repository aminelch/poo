<?php 


class Person {

    public $firstName=null;
    public $lastName=null;
    
    public function __construct($first_name , $last_name){
        $this->firstName=$first_name;
        $this->lastName=$last_name;
       
        
    }
    public function sayHello($first_name , $last_name):string{
        return  "Hello ". $first_name . " " . $last_name;
    }
}