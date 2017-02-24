<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeStringTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeString();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeString();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeString();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to not be of type string
     */
    public function testString()
    {
        $this->assert("nevada")->should()->notBeString();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeString();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeString();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeString();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeString();
    }
}
