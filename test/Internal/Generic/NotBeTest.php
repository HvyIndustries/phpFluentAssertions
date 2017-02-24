<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->notBe(false);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to not be true
     */
    public function testBool_BasicException()
    {
        $this->assert(true)->should()->notBe(true);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testBool_ExceptionWithReason()
    {
        $this->assert(true)->should()->notBe(true, "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testBool_ExceptionWithReasonBecause()
    {
        $this->assert(true)->should()->notBe(true, "because happy path");
    }

    public function testInt()
    {
        $this->assert(1)->should()->notBe("1");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to not be 1
     */
    public function testInt_BasicException()
    {
        $this->assert(1)->should()->notBe(1);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testInt_ExceptionWithReason()
    {
        $this->assert(1)->should()->notBe(1, "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testInt_ExceptionWithReasonBecause()
    {
        $this->assert(1)->should()->notBe(1, "because happy path");
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->notBe(1);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to not be 1
     */
    public function testFloat_BasicException()
    {
        $this->assert(1.0)->should()->notBe(1.0);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testFloat_ExceptionWithReason()
    {
        $this->assert(1.0)->should()->notBe(1.0, "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testFloat_ExceptionWithReasonBecause()
    {
        $this->assert(1.0)->should()->notBe(1.0, "because happy path");
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBe("scout");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to not be "nevada"
     */
    public function testString_BasicException()
    {
        $this->assert("nevada")->should()->notBe("nevada");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testString_ExceptionWithReason()
    {
        $this->assert("nevada")->should()->notBe("nevada", "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testString_ExceptionWithReasonBecause()
    {
        $this->assert("nevada")->should()->notBe("nevada", "because happy path");
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBe(array("1st", "3rd"));
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to not be array
     */
    public function testArray_BasicException()
    {
        $this->assert(array("1st", "2nd"))->should()->notBe(array("1st", "2nd"));
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testArray_ExceptionWithReason()
    {
        $this->assert(array("1st", "2nd"))->should()->notBe(array("1st", "2nd"), "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testArray_ExceptionWithReasonBecause()
    {
        $this->assert(array("1st", "2nd"))->should()->notBe(array("1st", "2nd"), "because happy path");
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBe(false);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to not be null
     */
    public function testNull_BasicException()
    {
        $this->assert(null)->should()->notBe(null);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testNull_ExceptionWithReason()
    {
        $this->assert(null)->should()->notBe(null, "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testNull_ExceptionWithReasonBecause()
    {
        $this->assert(null)->should()->notBe(null, "because happy path");
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert()->should()->notBe();
    // }

    public function testCallable()
    {
        $callable = function() { return "test"; };
        $this->assert($callable)->should()->notBe("test");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to not be callable
     */
    public function testCallable_BasicException()
    {
        $callable = function() { return "test"; };
        $this->assert($callable)->should()->notBe($callable);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testCallable_ExceptionWithReason()
    {
        $callable = function() { return "test"; };
        $this->assert($callable)->should()->notBe($callable, "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testCallable_ExceptionWithReasonBecause()
    {
        $callable = function() { return "test"; };
        $this->assert($callable)->should()->notBe($callable, "because happy path");
    }

    public function testObject()
    {
        $class = new stdClass();
        $this->assert($class)->should()->notBe(false);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to not be object
     */
    public function testObject_BasicException()
    {
        $class = new stdClass();
        $this->assert($class)->should()->notBe($class);
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because this reason doesn't have because at the start
     */
    public function testObject_ExceptionWithReason()
    {
        $class = new stdClass();
        $this->assert($class)->should()->notBe($class, "this reason doesn't have because at the start");
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage because happy path
     */
    public function testObject_ExceptionWithReasonBecause()
    {
        $class = new stdClass();
        $this->assert($class)->should()->notBe($class, "because happy path");
    }
}
