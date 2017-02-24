<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeBoolTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to not be of type bool
     */
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected false to not be of type bool
     */
    public function testBoolFalse()
    {
        $this->assert(false)->should()->notBeBool();
    }

    public function testIntZero()
    {
        $this->assert(0)->should()->notBeBool();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeBool();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeBool();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeBool();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeBool();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeBool();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeBool();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeBool();
    }
}
