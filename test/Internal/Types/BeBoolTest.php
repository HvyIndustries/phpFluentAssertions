<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeBoolTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->beBool();
        $this->assert(false)->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 0 to be of type bool
     */
    public function testIntZero()
    {
        $this->assert(0)->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 1 to be of type bool
     */
    public function testIntOne()
    {
        $this->assert(1)->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected 3.14 to be of type bool
     */
    public function testFloat()
    {
        $this->assert(3.14)->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected "nevada" to be of type bool
     */
    public function testString()
    {
        $this->assert("nevada")->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected array to be of type bool
     */
    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected null to be of type bool
     */
    public function testNull()
    {
        $this->assert(null)->should()->beBool();
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected callable to be of type bool
     */
    public function testCallable()
    {
        $data = function() { return "test"; };
        $this->assert($data)->should()->beBool();
    }

    /**
     * @expectedException        FluentAssertionException
     * @expectedExceptionMessage Expected object to be of type bool
     */
    public function testObject()
    {
        $data = new stdClass();
        $this->assert($data)->should()->beBool();
    }
}
