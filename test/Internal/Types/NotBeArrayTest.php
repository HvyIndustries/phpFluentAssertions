<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeArrayTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeArray();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeArray();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeArray();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeArray();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to not be of type array
     */
    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeArray();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeArray();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeArray();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeArray();
    }
}
