<?php 

class User_model {

    public function getAllUsers()
    {
        $fp = @fopen(__DIR__ . '/../listOfUsers', 'r');

        if ($fp) {
            $array = explode("\n", fread($fp, filesize(__DIR__ . '/../listOfUsers')));
        }

        return $array;
    }
}
