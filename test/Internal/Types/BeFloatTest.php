<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeFloatTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to be of type float
     */
    public function testBool()
    {
        $this->assert(true)->should()->beFloat();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be of type float
     */
    public function testIntOne()
    {
        $this->assert(1)->should()->beFloat();
    }

    public function testFloat()
    {
        $this->assert(3.14)->should()->beFloat();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be of type float
     */
    public function testString()
    {
        $this->assert("nevada")->should()->beFloat();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be of type float
     */
    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->beFloat();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be of type float
     */
    public function testNull()
    {
        $this->assert(null)->should()->beFloat();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be of type float
     */
    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->beFloat();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be of type float
     */
    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->beFloat();
    }
}
