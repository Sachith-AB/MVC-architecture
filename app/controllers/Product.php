<?php

class Product {

    use Controller;
    public function index() {
        echo "this is product controller";

        $this->view('product');
    }
}