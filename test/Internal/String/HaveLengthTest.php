<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class HaveLengthTest extends FluentAssertionsTestCase
{
    public function testStringHasLength()
    {
        $this->assert("nevada")->should()->haveLength(6);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntResultThrowsException()
    {
        $this->assert(1)->should()->haveLength(1);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "bool"
     */
    public function testBoolResultThrowsException()
    {
        $this->assert(true)->should()->haveLength(4);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatResultThrowsException()
    {
        $this->assert(1.0)->should()->haveLength(3);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayResultThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->haveLength(2);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'result' parameter was empty or null
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->haveLength(4);
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->assert()->should()->haveLength();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableResultThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->haveLength(20);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectResultThrowsException()
    {
        $this->assert(new stdClass())->should()->haveLength(10);
    }
}
