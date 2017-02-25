<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotStartWithTest extends FluentAssertionsTestCase
{
    public function testStringDoesNotStartWithString()
    {
        $this->assert("nevada")->should()->notStartWith("vada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testEmptyStringThrowsException()
    {
        $this->assert("nevada")->should()->notStartWith("");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testNullThrowsException()
    {
        $this->assert("nevada")->should()->notStartWith(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->notStartWith("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "bool"
     */
    public function testBoolThrowsException()
    {
        $this->assert(true)->should()->notStartWith("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->notStartWith("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->notStartWith("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'result' parameter was empty or null
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->notStartWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->notStartWith();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->notStartWith("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->notStartWith("stdClass");
    }
}
