<?php

class Users extends Controller {
    public function index()
    {
        $data = $this->model('User_model')->getAllUsers();
        //file_put_contents(__DIR__ . '/../listOfUsers', "\nusername=denis\n" . "password=switzerland" , FILE_APPEND);
        $this->view('templates/header', null);
        $this->view('users/index', $data);
        $this->view('templates/footer');
    }
}