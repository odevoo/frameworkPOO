<?php 
/**
* 
*/
class User
{
    protected $prenom ='John';
    protected $nom ='Doe';

    public function getName(){
        return $this->prenom.' '.$this->nom;
    }
}

 /****

 public function __set($property, $value) {
    if (property_exists($this, $property)) {
        $this->$proprety = $value;
    }
 }



 public function __get($property) {
    return $this->$property;
 }


 *////
