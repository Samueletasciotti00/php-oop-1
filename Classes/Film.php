<?php 

//Dichiariamo la classe Film
class Film {

    // Dichiariamo gli elementi della classse
    public $name; 
    public $category;
    public $vote;

    // Dichiariamo il costruttore
    public function __construct($_name, $_category){
        $this->name = $_name;
        $this->category = $_category;
    }

    //Funzione per indicare il film
    public function Infofilm(){
        echo 'Il film' + $this->name + 'ha' + $this->vote + 'stelle';
    }

} 