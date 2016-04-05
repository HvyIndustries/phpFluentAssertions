<?php

require "includes.php";

abstract class PHPUnit_FluentAssertions_TestCase extends PHPUnit_Framework_TestCase
{
    public $result;
    public $resultType;

    public function assert($result)
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
    public function be($expected, $reason = "")
    {
        self::assertThat($this->result === $expected, self::isTrue(), $reason);
    }

    public function notBe($expected, $reason = "")
    {
        self::assertThat($this->result !== $expected, self::isTrue(), $reason);
    }


    // Booleans

    public function beTrue($reason = "")
    {
        self::checkIsType("bool", $this->resultType, "result");
        self::assertThat($this->result === true, self::isTrue(), $reason);
    }

    public function notBeTrue($reason = "")
    {
        self::checkIsType("bool", $this->resultType, "result");
        self::assertThat($this->result !== true, self::isTrue(), $reason);
    }

    public function beFalse($reason = "")
    {
        self::checkIsType("bool", $this->resultType, "result");
        self::assertThat($this->result === false, self::isTrue(), $reason);
    }

    public function notBeFalse($reason = "")
    {
        self::checkIsType("bool", $this->resultType, "result");
        self::assertThat($this->result !== false, self::isTrue(), $reason);
    }


    // Type Checking

    public function beBool($reason = "")
    {
        self::assertThat($this->resultType === "bool", self::isTrue(), $reason);
    }

    public function notBeBool($reason = "")
    {
        self::assertThat($this->resultType !== "bool", self::isTrue(), $reason);
    }

    public function beInt($reason = "")
    {
        self::assertThat($this->resultType === "int", self::isTrue(), $reason);
    }

    public function notBeInt($reason = "")
    {
        self::assertThat($this->resultType !== "int", self::isTrue(), $reason);
    }

    public function beString($reason = "")
    {
        self::assertThat($this->resultType === "string", self::isTrue(), $reason);
    }

    public function notBeString($reason = "")
    {
        self::assertThat($this->resultType !== "string", self::isTrue(), $reason);
    }

    public function beNull($reason = "")
    {
        self::assertThat($this->result === null, self::isTrue(), $reason);
    }

    public function notBeNull($reason = "")
    {
        self::assertThat($this->result !== null, self::isTrue(), $reason);
    }


    // Strings

    public function contain($needle, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("string", TypeChecker::GetType($needle), "expected");

        self::checkArgumentNullOrEmpty($needle, "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if (strpos($this->result, $needle) !== false)
        {
            // Found needle within haystack
            self::assertThat(true === true, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === false, self::isTrue(), $reason);
        }
    }

    public function notContain($needle, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("string", TypeChecker::GetType($needle), "expected");

        self::checkArgumentNullOrEmpty($needle, "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if (strpos($this->result, $needle) !== false)
        {
            // Found needle within haystack
            self::assertThat(true === false, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === true, self::isTrue(), $reason);
        }
    }

    public function startWith($needle, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("string", TypeChecker::GetType($needle), "expected");

        self::checkArgumentNullOrEmpty($needle, "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if (strpos($this->result, $needle) === 0)
        {
            // Needle was at the start of the string
            self::assertThat(true === true, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === false, self::isTrue(), $reason);
        }
    }

    public function notStartWith($needle, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("string", TypeChecker::GetType($needle), "expected");

        self::checkArgumentNullOrEmpty($needle, "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if (strpos($this->result, $needle) !== 0)
        {
            // Needle was not at the start of the string
            self::assertThat(true === true, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === false, self::isTrue(), $reason);
        }
    }

    public function endWith($needle, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("string", TypeChecker::GetType($needle), "expected");

        self::checkArgumentNullOrEmpty($needle, "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if (($temp = strlen($this->result) - strlen($needle)) >= 0 && strpos($this->result, $needle, $temp) !== false)
        {
            // Needle was at the end of the string
            self::assertThat(true === true, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === false, self::isTrue(), $reason);
        }
    }

    public function notEndWith($needle, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("string", TypeChecker::GetType($needle), "expected");

        self::checkArgumentNullOrEmpty($needle, "expected");

        // TODO -- Custom reason to display strings in error instead of "true" and "false"
        if (($temp = strlen($this->result) - strlen($needle)) >= 0 && strpos($this->result, $needle, $temp) !== false)
        {
            // Needle was not at the end of the string
            self::assertThat(true === false, self::isTrue(), $reason);
        }
        else
        {
            self::assertThat(true === true, self::isTrue(), $reason);
        }
    }

    public function haveLength($length, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::GetType($length), "expected");

        self::checkArgumentNullOrEmpty($length, "expected");

        self::assertThat(strlen($this->result) === $length, self::isTrue(), $reason);
    }

    public function notHaveLength($length, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::GetType($length), "expected");

        self::checkArgumentNullOrEmpty($length, "expected");

        self::assertThat(strlen($this->result) !== $length, self::isTrue(), $reason);
    }


    // Arrays

    public function haveCount($count, $reason = "")
    {
        self::checkIsType("array", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::GetType($count), "expected");

        self::checkArgumentNullOrEmpty($count, "expected");

        self::assertThat(count($this->result) === $count, self::isTrue(), $reason);
    }

    public function notHaveCount($count, $reason = "")
    {
        self::checkIsType("array", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::GetType($count), "expected");

        self::checkArgumentNullOrEmpty($count, "expected");

        self::assertThat(count($this->result) !== $count, self::isTrue(), $reason);
    }

    public function containItem($needle, $reason = "")
    {
        self::checkIsType("array", $this->resultType, "result");

        $result = array_search($needle, $this->result);

        self::assertThat($result !== false, self::isTrue(), $reason);
    }

    public function notContainItem($needle, $reason = "")
    {
        self::checkIsType("array", $this->resultType, "result");

        $result = array_search($needle, $this->result);

        self::assertThat($result === false, self::isTrue(), $reason);
    }


    // Helper Functions

    private static function checkIsType($typeName, $variableType, $param)
    {
        if ($variableType !== $typeName)
        {
            throw new InvalidArgumentException("Expected type: {$typeName}, but provided '{$param}' value was type: {$variableType}");
        }
    }
    
    private static function checkArgumentNullOrEmpty($arg, $param)
    {
        if ($arg === null || $arg === "")
        {
            throw new InvalidArgumentException("Value provided for '{$param}' was empty or null");
        }
    }

    // TODO -- Expand this out
    private function buildReason($expected, $givenReason)
    {
        $reason = "Expected {$this->result} to be {$expected}";

        if ($givenReason != "")
        {
            $reason .= " {$givenReason}";
        }

        return $reason;
    }
}
