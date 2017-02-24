<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeTrueTest extends FluentAssertionsTestCase
{
    public function testTrueIsTrue()
    {
        $this->assert(true)->should()->beTrue();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be true
     */
    public function testIntThrowsException()
    {
        $this->assert(1)->should()->beTrue();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be true
     */
    public function testFloatThrowsException()
    {
        $this->assert(1.0)->should()->beTrue();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "1" to be true
     */
    public function testStringThrowsException()
    {
        $this->assert("1")->should()->beTrue();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be true
     */
    public function testArrayThrowsException()
    {
        $this->assert(array("1st", "2nd"))->should()->beTrue();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be true
     */
    public function testNullThrowsException()
    {
        $this->assert(null)->should()->beTrue();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->assert()->should()->beTrue();
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be true
     */
    public function testCallableThrowsException()
    {
        $this->assert(function() { return "test"; })->should()->beTrue();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be true
     */
    public function testObjectThrowsException()
    {
        $this->assert(new stdClass())->should()->beTrue();
    }
}
