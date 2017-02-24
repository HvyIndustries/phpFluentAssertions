<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeCallableTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeCallable();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeCallable();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeCallable();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeCallable();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeCallable();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeCallable();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to not be of type callable
     */
    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeCallable();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeCallable();
    }
}
