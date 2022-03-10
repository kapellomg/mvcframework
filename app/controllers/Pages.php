<?php
class Pages extends Controller {
    public fucntion __construct() {

    }

    public function index() {
        echo "Home page";
        $this->view('pages/index');
    }

    public function about() {
        echo "About";
    }
}