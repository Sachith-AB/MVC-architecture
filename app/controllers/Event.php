<?php

class Event {

    use Controller;
    public function index(){
        echo "This is event controller";

        $this->view('events/event');
    }
}