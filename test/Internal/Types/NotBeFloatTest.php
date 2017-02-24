<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeFloatTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeFloat();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeFloat();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 3.14 to not be of type float
     */
    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeFloat();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeFloat();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeFloat();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeFloat();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeFloat();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeFloat();
    }
}
