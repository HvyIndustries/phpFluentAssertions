<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeBoolTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testInt()
    {
        $this->Assert(1)->Should()->NotBeBool();
    }

    public function testFloat()
    {
        $this->Assert(1.0)->Should()->NotBeBool();
    }

    public function testString()
    {
        $this->Assert("1")->Should()->NotBeBool();
    }

    public function testArray()
    {
        $this->Assert(array("1st", "2nd"))->Should()->NotBeBool();
    }

    public function testNull()
    {
        $this->Assert(null)->Should()->NotBeBool();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->Assert()->Should()->NotBeBool();
    // }

    public function testCallable()
    {
        $this->Assert(function() { return "test"; })->Should()->NotBeBool();
    }

    public function testObject()
    {
        $this->Assert(new stdClass())->Should()->NotBeBool();
    }
}
