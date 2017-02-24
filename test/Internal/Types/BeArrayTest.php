<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeArrayTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to be of type array
     */
    public function testBool()
    {
        $this->assert(true)->should()->beArray();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be of type array
     */
    public function testIntOne()
    {
        $this->assert(1)->should()->beArray();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 3.14 to be of type array
     */
    public function testFloat()
    {
        $this->assert(3.14)->should()->beArray();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be of type array
     */
    public function testString()
    {
        $this->assert("nevada")->should()->beArray();
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->beArray();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be of type array
     */
    public function testNull()
    {
        $this->assert(null)->should()->beArray();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be of type array
     */
    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->beArray();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be of type array
     */
    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->beArray();
    }
}
