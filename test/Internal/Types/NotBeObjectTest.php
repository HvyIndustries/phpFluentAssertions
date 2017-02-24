<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeObjectTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeObject();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeObject();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeObject();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeObject();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeObject();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeObject();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeObject();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to not be of type object
     */
    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeObject();
    }
}
