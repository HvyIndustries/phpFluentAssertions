<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class EndWithTest extends FluentAssertionsTestCase
{
    public function testStringEndsWithString()
    {
        $this->assert("nevada")->should()->endWith("ada");
    }

    public function testStringEndsWithEntireString()
    {
        $this->assert("nevada")->should()->endWith("nevada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testEmptyStringThrowsException()
    {
        $this->assert("nevada")->should()->endWith("");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testNullThrowsException()
    {
        $this->assert("nevada")->should()->endWith(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->endWith("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->endWith("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->endWith("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'result' parameter was empty or null
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->endWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->endWith();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->endWith("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->endWith("stdClass");
    }
}
