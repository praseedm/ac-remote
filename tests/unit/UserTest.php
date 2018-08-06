<?php
use \Models\User;
class UserTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    //calls before all test functions//
    public function setup() {
        $this->user = new User;
    }
    /** @test */
    public function Get_First_Name() {
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

    public function testEmailVariablesContainCorrectValues() {

         $user = new User;
        $user->setFirstName("Lamb");
        $user->setLastName("Black");
        $user->setEmail('lamb@g.com');

        $email_variables = $user->getEmailVariables();
        $this->assertArrayHasKey('full_name', $email_variables);
        $this->assertArrayHasKey('email', $email_variables);

        $this->assertEquals('Lamb Black', $email_variables['full_name']);
        $this->assertEquals('lamb@g.com', $email_variables['email']);
    }
}