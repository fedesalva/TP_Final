<?php
namespace Models;
class Cinema{
    private $name;
    private $address;
    private $capacity;

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setAddress($address){

        $this->address=$address;

    }

    public function setCapacity($capacity){
        $this->capacity=$capacity;
    }

    public function getName(){
        return $this->name;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getCapacity(){
        return $this->capacity;
    }
}
?>