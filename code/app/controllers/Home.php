<?php 

class Home extends Controller {
    public function index()
    {
        //file_put_contents(__DIR__ . '/../listOfUsers', "\nusername=denis\n" . "password=switzerland" , FILE_APPEND);
        $this->view('templates/header', null);
        $this->view('home/index', null);
        $this->view('templates/footer');
    }
}