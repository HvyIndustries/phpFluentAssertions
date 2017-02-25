<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeEquivalentToTest extends FluentAssertionsTestCase
{
    public function testStringContainsWhitespace()
    {
        $this->assert("NevadA")->should()->beEquivalentTo("NEVADA");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testEmptyStringThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo("");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be "ada"
     */
    public function testIncorrectStringThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo("ada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'expected' parameter was empty or null
     */
    public function testNullThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo(1);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo(3.14);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo(array("1" => "t"));
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->beEquivalentTo();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableThrowsException()
    {
        $this->assert("nevada")->should()->beEquivalentTo(function() { return "test"; });
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "int"
     */
    public function testIntExpectedThrowsException()
    {
        $this->assert(1)->should()->beEquivalentTo("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "float"
     */
    public function testFloatExpectedThrowsException()
    {
        $this->assert(1.0)->should()->beEquivalentTo("1.0");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "array"
     */
    public function testArrayResultThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->beEquivalentTo("1st");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid: Value provided for 'result' parameter was empty or null
     */
    public function testNullResultThrowsException()
    {
        $this->assert(null)->should()->beEquivalentTo("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->beEquivalentTo();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "callable"
     */
    public function testCallableResultThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->beEquivalentTo("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Invalid type: wanted type "string" but was actually type "object"
     */
    public function testObjectResultThrowsException()
    {
        $this->assert(new stdClass())->should()->beEquivalentTo("stdClass");
    }
}
