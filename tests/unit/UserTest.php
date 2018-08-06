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
        $this->user->setFirstName('Lamp');

        $this->assertEquals($this->user->getFirstName(), 'Lamp');
    }

    public function testTrimmed() {
        $this->user->setFirstName("Lamp ");
        $this->user->setLastName(" Black");

        $this->assertEquals("Lamp", $this->user->getFirstName());
        $this->assertEquals("Black", $this->user->getLastName());
    }

    public function testEmailVariablesContainCorrectValues() {
        $this->user->setFirstName("Lamb");
        $this->user->setLastName("Black");
        $this->user->setEmail('lamb@g.com');

        $email_variables = $this->user->getEmailVariables();
        $this->assertArrayHasKey('full_name', $email_variables);
        $this->assertArrayHasKey('email', $email_variables);

        $this->assertEquals('Lamb Black', $email_variables['full_name']);
        $this->assertEquals('lamb@g.com', $email_variables['email']);
    }
}