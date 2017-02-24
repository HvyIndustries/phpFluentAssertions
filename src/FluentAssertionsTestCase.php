<?php

require "includes.php";

abstract class FluentAssertionsTestCase extends PHPUnit_Framework_TestCase
{
    public $result;
    public $resultType;

    public $should;

    public function assert($result)
    {
        $this->result = $result;
        $this->resultType = TypeChecker::getType($result);

        $this->should = $this;

        return $this;
    }

    public function should()
    {
        return $this;
    }


    // Generic
    public function be($expected, $reason = "")
    {
        if ($this->result === $expected) {
            $this->completeTestAsPass();
        } else {
            $this->throwTestFailureException($expected, $reason);
        }
    }

    public function notBe($expected, $reason = "")
    {
        if ($this->result !== $expected) {
            $this->completeTestAsPass();
        } else {
            $this->throwTestFailureException($expected, $reason);
        }
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
        self::checkIsType("string", TypeChecker::getType($needle), "expected");

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
        self::checkIsType("string", TypeChecker::getType($needle), "expected");

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
        self::checkIsType("string", TypeChecker::getType($needle), "expected");

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
        self::checkIsType("string", TypeChecker::getType($needle), "expected");

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
        self::checkIsType("string", TypeChecker::getType($needle), "expected");

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
        self::checkIsType("string", TypeChecker::getType($needle), "expected");

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
        self::checkIsType("int", TypeChecker::getType($length), "expected");

        self::checkArgumentNullOrEmpty($length, "expected");

        self::assertThat(strlen($this->result) === $length, self::isTrue(), $reason);
    }

    public function notHaveLength($length, $reason = "")
    {
        self::checkIsType("string", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::getType($length), "expected");

        self::checkArgumentNullOrEmpty($length, "expected");

        self::assertThat(strlen($this->result) !== $length, self::isTrue(), $reason);
    }


    // Arrays

    public function haveCount($count, $reason = "")
    {
        self::checkIsType("array", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::getType($count), "expected");

        self::checkArgumentNullOrEmpty($count, "expected");

        self::assertThat(count($this->result) === $count, self::isTrue(), $reason);
    }

    public function notHaveCount($count, $reason = "")
    {
        self::checkIsType("array", $this->resultType, "result");
        self::checkIsType("int", TypeChecker::getType($count), "expected");

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

    private function buildReason($expected, $givenReason)
    {
        // TODO -- handle reason for other assertions (eg. expected 1 to NOT be 1)
        $reason = "Expected {$this->result} to be {$expected}";

        if ($givenReason != "")
        {
            if ($this->startsWith($givenReason, "because") || $this->startsWith($givenReason, "Because")) {
                $reason .= " {$givenReason}";
            } else {
                $reason .= " because {$givenReason}";
            }
        }

        return $reason;
    }

    private function startsWith($haystack, $needle)
    {
        // Search backwards through the string
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    private function completeTestAsPass() {
        self::assertThat(true, self::isTrue());
    }

    private function throwTestFailureException($expected, $reason) {
        throw new AssertionException($this->buildReason($expected, $reason));
    }
}
