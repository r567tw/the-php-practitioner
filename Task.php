<?php 

class Task {
    protected $id;
    protected $title;
    protected $complete;

    function completed(){
        return $this->complete == 1;
    }
}