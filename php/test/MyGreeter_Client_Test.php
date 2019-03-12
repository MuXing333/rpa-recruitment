<?php

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
        $this->asserTrue(
            $this->greeter->getGreeting('12:01:00') == "Good morning"
        );
        $this->asserTrue(
            $this->greeter->getGreeting('17:59:00') == "Good afternoon"
        );
        $this->asserTrue(
            $this->greeter->getGreeting('23:59:59') == "Good evening"
        );
    }
}
