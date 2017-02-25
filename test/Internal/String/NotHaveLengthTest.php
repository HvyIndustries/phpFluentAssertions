<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotHaveLengthTest extends FluentAssertionsTestCase
{
    public function testStringHasLength()
    {
        $this->assert("nevada")->should()->notHaveLength(4);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntResultThrowsException()
    {
        $this->assert(1)->should()->notHaveLength(1);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "bool"
     */
    public function testBoolResultThrowsException()
    {
        $this->assert(true)->should()->notHaveLength(4);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatResultThrowsException()
    {
        $this->assert(1.0)->should()->notHaveLength(3);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayResultThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->notHaveLength(2);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'result' parameter was empty or null
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->notHaveLength(4);
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->assert()->should()->notHaveLength();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableResultThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->notHaveLength(20);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectResultThrowsException()
    {
        $this->assert(new stdClass())->should()->notHaveLength(10);
    }
}
