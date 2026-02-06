<?php

class User {
    private $username;
    private $password;

    public function __construct($user, $pass) {
        $this->username = $user;
        $this->password = md5($pass);
    }

    private function password() {
        return $this->password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
      
    }
}

$user = new User("admin", "12345");
echo "Username: " . $user->getUsername();
?>