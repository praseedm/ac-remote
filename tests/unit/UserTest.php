<?php
use \Models\User;
class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testGetFirstName() {
        $user = new User;
        $user->setFirstName('Lamp');

        $this->assertEquals($user->getFirstName(), 'Lamp');
    }

    public function testTrimmed() {
        $user = new User;
        $user->setFirstName("Lamp ");
        $user->setLastName(" Black");

        $this->assertEquals("Lamp", $user->getFirstName());
        $this->assertEquals("Black", $user->getLastName());
    }
}