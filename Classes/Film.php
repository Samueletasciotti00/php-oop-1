<?php 

//Dichiariamo la classe Film
class Film {

    // Dichiariamo gli elementi della classse
    public $name; 
    public $category;
    public $vote;

    // Dichiariamo il costruttore
    public function __construct($_name, $_vote){
        $this->name = $_name;
        $this->vote = $_vote;
    }

    //Funzione per indicare il film
    public function Infofilm(){
        return 'Il film' + $this->name + 'ha' + $this->vote + 'stelle';
    }

} 