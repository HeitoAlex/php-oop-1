<?php 

class Movie{
    
    public $image;
    public $title;
    public $plot;
    public $content = '';

    public function __construct($_image, $_title, $_plot){
        $this->image = $_image;
        $this->title = $_title;
        $this->plot = $_plot;
        
    }

    public function setContent($eta){
        if ($eta >= 18){
            $this -> content = 'Adults only';
        } elseif ($eta >= 14 && $eta < 18){
            $this -> content = 'Kids with adults';
        } else {
            $this -> content = 'For all';
        }
    }

    public function getContent(){
        return $this -> content;
    }
}