<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeFalseTest extends FluentAssertionsTestCase
{
    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected false to not be false
     */
    public function testTrueIsNotFalse()
    {
        $this->assert(false)->should()->notBeFalse();
    }

    public function testIntZeroIsNotFalse()
    {
        $this->assert(0)->should()->notBeFalse();
    }

    public function testIntIsNotFalse()
    {
        $this->assert(1)->should()->notBeFalse();
    }

    public function testFloatIsNotFalse()
    {
        $this->assert(1.0)->should()->notBeFalse();
    }

    public function testStringIsNotFalse()
    {
        $this->assert("1")->should()->notBeFalse();
    }

    public function testArrayIsNotFalse()
    {
        $this->assert(array("1st", "2nd"))->should()->notBeFalse();
    }

    public function testNullIsNotFalse()
    {
        $this->assert(null)->should()->notBeFalse();
    }

    // TODO -- Handle resources
    // public function testResourceIsNotFalse()
    // {
    //     $this->assert()->should()->notBeFalse();
    // }

    public function testCallableIsNotFalse()
    {
        $this->assert(function() { return "test"; })->should()->notBeFalse();
    }

    public function testObjectIsNotFalse()
    {
        $this->assert(new stdClass())->should()->notBeFalse();
    }
}
