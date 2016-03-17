<?php

require "includes.php";

class PHPUnit_FluentAssertions_TestCase extends PHPUnit_Framework_TestCase
{
    public $result;
    public $resultType;

    public function Assert($result)
    {
        $this->result = $result;
        $this->resultType = TypeChecker::GetType($result);

        return $this;
    }

    public function Should()
    {
        return $this;
    }


    // Generic
    public function Be($expected, $reason = "")
    {
        self::assertThat($this->result === $expected, self::isTrue(), $reason);
    }

    public function NotBe($expected, $reason = "")
    {
        self::assertThat($this->result !== $expected, self::isTrue(), $reason);
    }


    // Booleans

    public function BeTrue($reason = "")
    {
        self::CheckIsType("bool", $this->resultType, "result");
        self::assertThat($this->result === true, self::isTrue(), $reason);
    }

    public function NotBeTrue($reason = "")
    {
        self::CheckIsType("bool", $this->resultType, "result");
        self::assertThat($this->result !== true, self::isTrue(), $reason);
    }

    public function BeFalse($reason = "")
    {
        self::CheckIsType("bool", $this->resultType, "result");
        self::assertThat($this->result === false, self::isTrue(), $reason);
    }

    public function NotBeFalse($reason = "")
    {
        self::CheckIsType("bool", $this->resultType, "result");
        self::assertThat($this->result !== false, self::isTrue(), $reason);
    }


    // Type Checking

    public function BeBool($reason = "")
    {
        self::assertThat($this->resultType === "bool", self::isTrue(), $reason);
    }

    public function NotBeBool($reason = "")
    {
        self::assertThat($this->resultType !== "bool", self::isTrue(), $reason);
    }

    public function BeInt($reason = "")
    {
        self::assertThat($this->resultType === "int", self::isTrue(), $reason);
    }

    public function NotBeInt($reason = "")
    {
        self::assertThat($this->resultType !== "int", self::isTrue(), $reason);
    }

    public function BeString($reason = "")
    {
        self::assertThat($this->resultType === "string", self::isTrue(), $reason);
    }

    public function NotBeString($reason = "")
    {
        self::assertThat($this->resultType !== "string", self::isTrue(), $reason);
    }

    public function BeNull($reason = "")
    {
        self::assertThat($this->result === null, self::isTrue(), $reason);
    }

    public function NotBeNull($reason = "")
    {
        self::assertThat($this->result !== null, self::isTrue(), $reason);
    }


    // Strings

    public function Contain($needle, $reason = "")
    {
        self::CheckIsType("string", $this->resultType, "result");
        self::CheckIsType("string", TypeChecker::GetType($needle), "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if(strpos($this->result, $needle) !== false)
        {
            // Found needle within haystack
            self::assertThat(true === true, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === false, self::isTrue(), $reason);
        }
    }

    public function NotContain($needle, $reason = "")
    {
        self::CheckIsType("string", $this->resultType, "result");
        self::CheckIsType("string", TypeChecker::GetType($needle), "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if(strpos($this->result, $needle) !== false)
        {
            // Found needle within haystack
            self::assertThat(true === false, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === true, self::isTrue(), $reason);
        }
    }


    private static function CheckIsType($typeName, $variableType, $param)
    {
        if($variableType !== $typeName)
        {
            throw new InvalidArgumentException("Expected type: {$typeName}, but provided '{$param}' value was type: {$variableType}");
        }
    }

    // TODO -- Expand this out
    private function BuildReason($expected, $givenReason)
    {
        $reason = "Expected {$this->result} to be {$expected}";

        if($givenReason != "")
        {
            $reason .= " {$givenReason}";
        }

        return $reason;
    }
}
