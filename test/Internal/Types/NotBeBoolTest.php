<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeBoolTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testInt()
    {
        $this->assert(1)->should()->notBeBool();
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->notBeBool();
    }

    public function testString()
    {
        $this->assert("1")->should()->notBeBool();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeBool();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeBool();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->assert()->should()->notBeBool();
    // }

    public function testCallable()
    {
        $this->assert(function() { return "test"; })->should()->notBeBool();
    }

    public function testObject()
    {
        $this->assert(new stdClass())->should()->notBeBool();
    }
}
