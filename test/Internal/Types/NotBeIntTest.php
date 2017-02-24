<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeIntTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->notBeInt();
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->notBeInt();
    }

    public function testString()
    {
        $this->assert("1")->should()->notBeInt();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeInt();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeInt();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->assert()->should()->notBeInt();
    // }

    public function testCallable()
    {
        $this->assert(function() { return "test"; })->should()->notBeInt();
    }

    public function testObject()
    {
        $this->assert(new stdClass())->should()->notBeInt();
    }
}
