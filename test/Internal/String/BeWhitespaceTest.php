<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeWhitespaceTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "ne va da " to be whitespace
     */
    public function testStringContainsWhitespace()
    {
        $this->assert("ne va da ")->should()->beWhitespace();
    }

    public function testStringIsOnlyWhitespace()
    {
        $this->assert("    ")->should()->beWhitespace();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be whitespace
     */
    public function testEmptyStringThrowsException()
    {
        $this->assert("nevada")->should()->beWhitespace();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be whitespace
     */
    public function testNullThrowsException()
    {
        $this->assert("nevada")->should()->beWhitespace(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be whitespace because ada
     */
    public function testStringContainsStringAtEnd()
    {
        $this->assert("nevada")->should()->beWhitespace("ada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->beWhitespace("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->beWhitespace("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->beWhitespace("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "null"
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->beWhitespace("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->beWhitespace();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->beWhitespace("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->beWhitespace("stdClass");
    }
}
