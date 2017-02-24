<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeStringTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->notBeString();
    }

    public function testInt()
    {
        $this->assert(1)->should()->notBeString();
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->notBeString();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeString();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeString();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->assert()->should()->notBeString();
    // }

    public function testCallable()
    {
        $this->assert(function() { return "test"; })->should()->notBeString();
    }

    public function testObject()
    {
        $this->assert(new stdClass())->should()->notBeString();
    }
}
