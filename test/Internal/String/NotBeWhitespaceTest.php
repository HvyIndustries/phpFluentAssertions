<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeWhitespaceTest extends FluentAssertionsTestCase
{
    public function testStringContainsWhitespace()
    {
        $this->assert("ne va da ")->should()->notBeWhitespace();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "    " to not be whitespace
     */
    public function testStringIsOnlyWhitespace()
    {
        $this->assert("    ")->should()->notBeWhitespace();
    }

    public function testEmptyStringThrowsException()
    {
        $this->assert("nevada")->should()->notBeWhitespace();
    }

    public function testNullThrowsException()
    {
        $this->assert("nevada")->should()->notBeWhitespace(null);
    }

    public function testStringContainsStringAtEnd()
    {
        $this->assert("nevada")->should()->notBeWhitespace("ada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->notBeWhitespace("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->notBeWhitespace("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeWhitespace("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "null"
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->notBeWhitespace("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->notBeWhitespace();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->notBeWhitespace("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->notBeWhitespace("stdClass");
    }
}
