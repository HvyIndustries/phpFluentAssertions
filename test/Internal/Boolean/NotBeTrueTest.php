<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeTrueTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected true to not be true
     */
    public function testTrueIsNotTrue()
    {
        $this->assert(true)->should()->notBeTrue();
    }

    public function testFalseIsNotTrue()
    {
        $this->assert(false)->should()->notBeTrue();
    }

    public function testIntIsNotTrue()
    {
        $this->assert(1)->should()->notBeTrue();
    }

    public function testFloatIsNotTrue()
    {
        $this->assert(1.0)->should()->notBeTrue();
    }

    public function testStringIsNotTrue()
    {
        $this->assert("1")->should()->notBeTrue();
    }

    public function testArrayIsNotTrue()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeTrue();
    }

    public function testNullIsNotTrue()
    {
        $this->assert(null)->should()->notBeTrue();
    }

    // TODO -- Handle resources
    // public function testResourceIsNotTrue()
    // {
    //     $this->assert()->should()->notBeTrue();
    // }

    public function testCallableIsNotTrue()
    {
        $this->assert(function() { return "test"; })->should()->notBeTrue();
    }

    public function testObjectIsNotTrue()
    {
        $this->assert(new stdClass())->should()->notBeTrue();
    }
}
