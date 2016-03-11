<?php

class FluentAssertion
{
    public $result;

    function Assert($result)
    {
        $this->result = $result;
        return $this;
    }

    function Should()
    {
        return $this;
    }

    function Be($expected)
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
    
    function TestMethod()
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

    function CheckProperties()
    {
        $this->Assert($this->sut->firstProp)->Should()->Be("PROPERTY");
        $this->Assert($this->sut->secondProp)->Should()->Be("SECOND PROP");
        $this->Assert($this->sut->TestMethod())->Should()->Be("test123");
    }

    function GenericCheck()
    {
        $this->Assert(1024)->Should()->Be(1024);
    }
}

$tester = new TestClass();

$tester->CheckProperties();
$tester->GenericCheck();