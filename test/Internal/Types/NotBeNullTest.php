<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeNullTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->notBeNull();
    }

    public function testInt()
    {
        $this->assert(1)->should()->notBeNull();
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->notBeNull();
    }

    public function testString()
    {
        $this->assert("1")->should()->notBeNull();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeNull();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->assert()->should()->notBeNull();
    // }

    public function testCallable()
    {
        $this->assert(function() { return "test"; })->should()->notBeNull();
    }

    public function testObject()
    {
        $this->assert(new stdClass())->should()->notBeNull();
    }
}
