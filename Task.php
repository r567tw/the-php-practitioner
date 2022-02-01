<?php 

class Task {
    protected $title;
    protected $complete;

    function completed(){
        return $this->complete == 1;
    }
}