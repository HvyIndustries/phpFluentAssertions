<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeObjectTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to be of type object
     */
    public function testBool()
    {
        $this->assert(true)->should()->beObject();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be of type object
     */
    public function testIntOne()
    {
        $this->assert(1)->should()->beObject();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 3.14 to be of type object
     */
    public function testFloat()
    {
        $this->assert(3.14)->should()->beObject();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be of type object
     */
    public function testString()
    {
        $this->assert("nevada")->should()->beObject();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be of type object
     */
    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->beObject();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be of type object
     */
    public function testNull()
    {
        $this->assert(null)->should()->beObject();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be of type object
     */
    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->beObject();
    }

    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->beObject();
    }
}
