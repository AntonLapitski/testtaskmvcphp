<?php

class Login extends Controller {

    public function index()
    {
        $array = $this->model('User_model')->getAllUsers();

        for($i = 0; $i < count($array); $i++) {
            if ((strpos($array[$i], 'username') === 0) && (strpos($array[$i + 1], 'password') === 0)) {
                $opponents[] = array('username' => $array[$i], 'password' => $array[$i + 1]);
            }
        }

        for ($i = 0; $i < count($opponents); $i++) {
            $absorbed[] = [
                'username' => substr($opponents[$i]['username'], strpos($opponents[$i]['username'], "=") + 1),
                'password' => substr($opponents[$i]['password'], strpos($opponents[$i]['password'], "=") + 1)
            ];
        }

        $this->attemptLogin($_REQUEST, $absorbed);
    }

    public function attemptLogin($request, $absorbed)
    {
        for ($i = 0; $i < count($absorbed); $i++) {
            if($absorbed[$i]['username'] === $request['username'] && $absorbed[$i]['password'] === $request['password']){
                header('location: http://localhost/phpmvc/code/public/?url=users', true);
                exit();
            }
        }

        header('location: http://localhost/phpmvc/code/public', true);
    }
}