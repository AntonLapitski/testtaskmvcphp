<?php

class Pop extends Controller {
    public function index()
    {
        $name = $_REQUEST['name'];
        $surname = $_REQUEST['surname'];
        $age = $_REQUEST['age'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $array = $this->model('User_model')->getAllUsers();

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] === 'username='.$username || $array[$i] === 'password='.$password) {
                header('location: http://localhost/phpmvc/code/public/?url=users', true);
                exit();
            }
        }

        file_put_contents(
            __DIR__ . '/../listOfUsers',
            "\nname=$name\nsurname=$surname\nage=$age\nusername=$username\npassword=$password",
            FILE_APPEND
        );

        header('location: http://localhost/phpmvc/code/public/?url=users', true);
    }
}
