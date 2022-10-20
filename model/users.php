<?php

    class User{

        public $id;
        //public,private, protected
        public $username;
        public $password;

        //postoji samo jedan konstruktor
        public function __construct($id = null, $username = null,$password = null)
        {
            //pristupamo globalnoj i dajemo joj vrednost od id kao this.id = id u javi
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
        }

        public static function loginUser($user,mysqli $conn)
        {
            //dupli navodnici gleda kao promenljiva da postoji
            $query = "SELECT * FROM user WHERE username='$user->username' AND password='$user->passwo rd'";
            return $conn->query($query);
        }
    }


?>