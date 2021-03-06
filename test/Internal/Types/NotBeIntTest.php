<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeIntTest extends FluentAssertionsTestCase
{
    public function testBoolTrue()
    {
        $this->assert(true)->should()->notBeInt();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to not be of type int
     */
    public function testIntOne()
    {
        $this->assert(1)->should()->notBeInt();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->notBeInt();
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBeInt();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeInt();
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBeInt();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->notBeInt();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->notBeInt();
    }
}
