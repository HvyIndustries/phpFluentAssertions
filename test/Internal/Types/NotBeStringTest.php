<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeStringTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testBool()
    {
        $this->Assert(true)->Should()->NotBeString();
    }
    
    public function testInt()
    {
        $this->Assert(1)->Should()->NotBeString();
    }

    public function testFloat()
    {
        $this->Assert(1.0)->Should()->NotBeString();
    }

    public function testArray()
    {
        $this->Assert(array("1st", "2nd"))->Should()->NotBeString();
    }

    public function testNull()
    {
        $this->Assert(null)->Should()->NotBeString();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->Assert()->Should()->NotBeString();
    // }

    public function testCallable()
    {
        $this->Assert(function() { return "test"; })->Should()->NotBeString();
    }

    public function testObject()
    {
        $this->Assert(new stdClass())->Should()->NotBeString();
    }
}
