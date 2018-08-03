<?php
namespace Models;
class User
{
    private $first_name;
    private $last_name;

    public function setFirstName($name) {
        $this->first_name = trim($name);
    }
    public function setEmail($name) {
        $this->first_name = trim($name);
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


}