<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeCallableTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to be of type callable
     */
    public function testBool()
    {
        $this->assert(true)->should()->beCallable();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be of type callable
     */
    public function testIntOne()
    {
        $this->assert(1)->should()->beCallable();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 3.14 to be of type callable
     */
    public function testFloat()
    {
        $this->assert(3.14)->should()->beCallable();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be of type callable
     */
    public function testString()
    {
        $this->assert("nevada")->should()->beCallable();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be of type callable
     */
    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->beCallable();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be of type callable
     */
    public function testNull()
    {
        $this->assert(null)->should()->beCallable();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->beCallable();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be of type callable
     */
    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->beCallable();
    }
}
