<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeNullTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testBool()
    {
        $this->Assert(true)->Should()->NotBeNull();
    }
    
    public function testInt()
    {
        $this->Assert(1)->Should()->NotBeNull();
    }

    public function testFloat()
    {
        $this->Assert(1.0)->Should()->NotBeNull();
    }

    public function testString()
    {
        $this->Assert("1")->Should()->NotBeNull();
    }

    public function testArray()
    {
        $this->Assert(array("1st", "2nd"))->Should()->NotBeNull();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->Assert()->Should()->NotBeNull();
    // }

    public function testCallable()
    {
        $this->Assert(function() { return "test"; })->Should()->NotBeNull();
    }

    public function testObject()
    {
        $this->Assert(new stdClass())->Should()->NotBeNull();
    }
}
