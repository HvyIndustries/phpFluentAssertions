<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeIntTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to be of type int
     */
    public function testBool()
    {
        $this->assert(true)->should()->beInt();
    }

    public function testIntOne()
    {
        $this->assert(1)->should()->beInt();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 3.14 to be of type int
     */
    public function testFloat()
    {
        $this->assert(3.14)->should()->beInt();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be of type int
     */
    public function testString()
    {
        $this->assert("nevada")->should()->beInt();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be of type int
     */
    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->beInt();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be of type int
     */
    public function testNull()
    {
        $this->assert(null)->should()->beInt();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be of type int
     */
    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->beInt();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be of type int
     */
    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->beInt();
    }
}
