<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class StartWithTest extends FluentAssertionsTestCase
{
    public function testStringStartsWithString()
    {
        $this->assert("nevada")->should()->startWith("nev");
    }

    public function testStringContainsEntireString()
    {
        $this->assert("nevada")->should()->startWith("nevada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testEmptyStringThrowsException()
    {
        $this->assert("nevada")->should()->startWith("");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testNullThrowsException()
    {
        $this->assert("nevada")->should()->startWith(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->startWith("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->startWith("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->startWith("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'result' parameter was empty or null
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->startWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->startWith();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->startWith("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->startWith("stdClass");
    }
}
