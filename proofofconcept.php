<?php

class FluentAssertion
{
    public $result;

    function assert($result)
    {
        $this->result = $result;
        return $this;
    }

    function should()
    {
        return $this;
    }

    function be($expected)
    {
        if ($this->result === $expected)
        {
            echo "Pass <br />" . PHP_EOL;
        }
        else
        {
            echo "Fail: expected '{$this->result}' to be '{$expected}' <br />" . PHP_EOL;
        }
    }
}

class ClassUnderTest
{
    public $firstProp;
    public $secondProp;

    function __construct()
    {
        $this->firstProp = "PROPERTY";
        $this->secondProp = "SECOND PROP";
    }
    
    function testMethod()
    {
        return $this->firstProp;
    }
}

class TestClass extends FluentAssertion
{
    public $sut;

    function __construct()
    {
        $this->sut = new ClassUnderTest();
    }

    function checkProperties()
    {
        $this->assert($this->sut->firstProp)->should()->be("PROPERTY");
        $this->assert($this->sut->secondProp)->should()->be("SECOND PROP");
        $this->assert($this->sut->testMethod())->should()->be("test123");
    }

    function genericCheck()
    {
        $this->assert(1024)->should()->be(1024);
    }
}

$tester = new TestClass();

$tester->checkProperties();
$tester->genericCheck();