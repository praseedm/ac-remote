<?php
namespace Models;
class User
{
    private $first_name;
    private $last_name;
    private $email;

    public function setFirstName($name) {
        $this->first_name = trim($name);
    }
    public function setEmail($email) {
        $this->email = trim($email);
    }
    public function getEmail( ) {
        return $this->email;
    }

    public function getFirstName() {
        return $this->first_name;
    }
    public function setLastName($name) {
        $this->last_name = trim($name);
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getFullName() {
        return "$this->first_name $this->last_name";
    }

    public function getEmailVariables() {
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmail()
        ];
    }

}