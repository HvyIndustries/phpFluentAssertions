<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeFalseTest extends FluentAssertionsTestCase
{
    public function testFalseIsFalse()
    {
        $this->assert(false)->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 0 to be false
     */
    public function testIntZeroThrowsException()
    {
        $this->assert(0)->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be false
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be false
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "1" to be false
     */
    public function testStringThrowsException()
    {
        $this->assert("1")->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be false
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be false
     */
    public function testNullThrowsException()
    {
        $this->assert(null)->should()->beFalse();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->assert()->should()->beFalse();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be false
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->beFalse();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be false
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->beFalse();
    }
}
