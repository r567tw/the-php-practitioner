<?php 

class Task {
    public $title;
    public $complete;

    function completed(){
        return $this->complete == 1;
    }
}