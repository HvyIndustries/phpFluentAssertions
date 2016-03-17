<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(__DIR__)) . "/src/FluentAssertions.php";

class TypeCheckerTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testReturnBool()
    {
        $result = TypeChecker::GetType(true);
        $this->assertSame($result, "bool");
    }

    public function testReturnInt()
    {
        $result = TypeChecker::GetType(1);
        $this->assertSame($result, "int");
    }

    public function testReturnFloat()
    {
        $result = TypeChecker::GetType(1.5);
        $this->assertSame($result, "float");
    }

    public function testReturnString()
    {
        $result = TypeChecker::GetType("this is a string");
        $this->assertSame($result, "string");
    }

    public function testReturnArray()
    {
        $result = TypeChecker::GetType(array("1st", "2nd"));
        $this->assertSame($result, "array");
    }

    public function testReturnNull()
    {
        $result = TypeChecker::GetType(null);
        $this->assertSame($result, "null");
    }

    public function testReturnCallable()
    {
        $result = TypeChecker::GetType(function() { return "test"; });
        $this->assertSame($result, "callable");
    }

    public function testReturnObjectInstance()
    {
        $result = TypeChecker::GetType(new stdClass());
        $this->assertSame($result, "object");
    }

    // TODO -- Test resources (mysql connection, etc) are returned properly
    // public function testReturnResource()
    // {
    //     $result = TypeChecker::GetType();
    //     $this->assertSame($result, "resource");
    // }
}
