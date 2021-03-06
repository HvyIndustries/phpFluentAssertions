<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeNullTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeNull();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->notBeNull();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeNull();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeNull();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeNull();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to not be of type null
     */
    public function testNull()
    {
        $this->assert(null)->should()->notBeNull();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeNull();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeNull();
    }
}
