<?php
namespace Models;
class Movie{
    private $name;
    private $length;
    private $language;
    private $image;

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setLength($length){

        $this->length=$length;

    }

    public function setLanguage($language){
        $this->language=$language;
    }

    public function setImage($image){
        $this->image=$image;
    }

    public function getName(){
        return $this->name;
    }

    public function getLength(){
        return $this->length;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function getImage(){
        return $this->image;
    }
}
?>