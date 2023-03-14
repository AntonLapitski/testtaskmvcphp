<?php

class Create extends Controller {
    public function index()
    {
        //file_put_contents(__DIR__ . '/../listOfUsers', "\nusername=denis\n" . "password=switzerland" , FILE_APPEND);
        $this->view('templates/header', null);
        $this->view('create/index', null);
        $this->view('templates/footer');
    }
}