<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class HaveCountTest extends FluentAssertionsTestCase
{
    public function testArrayHasCount()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(3);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "array" but was actually type "int"
     */
    public function testIntResultThrowsException()
    {
        $this->assert(1)->should()->haveCount("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "array" but was actually type "bool"
     */
    public function testBoolResultThrowsException()
    {
        $this->assert(true)->should()->haveCount("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "array" but was actually type "float"
     */
    public function testFloatResultThrowsException()
    {
        $this->assert(1.0)->should()->haveCount("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "string"
     */
    public function testArrayResultThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->haveCount("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "array" but was actually type "null"
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->haveCount("null");
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->assert()->should()->haveCount();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "array" but was actually type "callable"
     */
    public function testCallableResultThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->haveCount("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "array" but was actually type "object"
     */
    public function testObjectResultThrowsException()
    {
        $this->assert(new stdClass())->should()->haveCount("stdClass");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "null"
     */
    public function testNullExpectationException()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "bool"
     */
    public function testBoolExpectationThrowsException()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(true);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "float"
     */
    public function testFloatExpectationThrowsException()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(1.0);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "array"
     */
    public function testArrayExpectationThrowsException()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(array("1st", "2nd"));
    }

    // TODO -- Handle resources
    // public function testResourceExpectationThrowsException()
    // {
    //     $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "callable"
     */
    public function testCallableExpectationThrowsException()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(function() { return 6; });
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "int" but was actually type "object"
     */
    public function testObjectExpectationThrowsException()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->haveCount(new stdClass());
    }
}
