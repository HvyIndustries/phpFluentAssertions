<?php
/*---------------------------------------------------------------------------------------------
 *  Copyright (c) Hvy Industries. All rights reserved.
 *  Licensed under the MIT License. See "LICENSE" in the project root for license information.
 *  "HVY", "HVY Industries" and "Hvy Industries" are trading names of JCKD (UK) Ltd
 *
 *  PHP Fluent Assertions was written by nevada_scout (Joe Cotton)
 *  Based on the Fluent Assertions for .NET created by Dennis Doomen
 *--------------------------------------------------------------------------------------------*/

require "includes.php";

abstract class FluentAssertionsTestCase extends PHPUnit_Framework_TestCase
{
    private $result;
    private $resultType;

    private $expected;
    private $expectedType;

    private $reason;
    private $negativeComparison = false;

    public function assert($result)
    {
        $this->result = $result;
        $this->resultType = TypeChecker::getType($result);

        return $this;
    }

    public function should()
    {
        return $this;
    }


    // Generic
    public function be($expected, $reason = null)
    {
        $this->expected = $expected;
        $this->expectedType = TypeChecker::getType($expected);
        $this->reason = $reason;

        if ($this->result === $this->expected) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBe($expected, $reason = "")
    {
        $this->expected = $expected;
        $this->expectedType = TypeChecker::getType($expected);
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->result !== $this->expected) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }


    // Booleans

    public function beTrue($reason = "")
    {
        $this->expected = true;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        if ($this->result === $this->expected) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeTrue($reason = "")
    {
        $this->expected = true;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->result !== $this->expected) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beFalse($reason = "")
    {
        $this->expected = false;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        if ($this->result === $this->expected) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeFalse($reason = "")
    {
        $this->expected = false;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->result !== $this->expected) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }


    // Type Checking

    public function beBool($reason = "")
    {
        $this->expected = "of type bool";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "bool") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeBool($reason = "")
    {
        $this->expected = "of type bool";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "bool") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beInt($reason = "")
    {
        $this->expected = "of type int";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "int") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeInt($reason = "")
    {
        $this->expected = "of type int";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "int") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beFloat($reason = "")
    {
        $this->expected = "of type float";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "float") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeFloat($reason = "")
    {
        $this->expected = "of type float";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "float") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beString($reason = "")
    {
        $this->expected = "of type string";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "string") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeString($reason = "")
    {
        $this->expected = "of type string";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "string") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beArray($reason = "")
    {
        $this->expected = "of type array";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "array") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeArray($reason = "")
    {
        $this->expected = "of type array";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "array") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beNull($reason = "")
    {
        $this->expected = "of type null";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "null") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeNull($reason = "")
    {
        $this->expected = "of type null";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "null") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beCallable($reason = "")
    {
        $this->expected = "of type callable";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "callable") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeCallable($reason = "")
    {
        $this->expected = "of type callable";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "callable") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beObject($reason = "")
    {
        $this->expected = "of type object";
        $this->expectedType = "type";
        $this->reason = $reason;

        if ($this->resultType === "object") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeObject($reason = "")
    {
        $this->expected = "of type object";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        if ($this->resultType !== "object") {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }


    // Strings

    public function contain($needle, $reason = "")
    {
        $this->expected = $needle;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (strpos($this->result, $needle) !== false) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notContain($needle, $reason = "")
    {
        $this->expected = $needle;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (strpos($this->result, $needle) === false) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function startWith($needle, $reason = "")
    {
        $this->expected = $needle;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (strpos($this->result, $needle) === 0) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notStartWith($needle, $reason = "")
    {
        $this->expected = $needle;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (strpos($this->result, $needle) !== 0) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function endWith($needle, $reason = "")
    {
        $this->expected = $needle;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (($temp = strlen($this->result) - strlen($needle)) >= 0 && strpos($this->result, $needle, $temp) !== false) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notEndWith($needle, $reason = "")
    {
        $this->expected = $needle;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (($temp = strlen($this->result) - strlen($needle)) >= 0 && strpos($this->result, $needle, $temp) === false) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function haveLength($length, $reason = "")
    {
        $this->expected = $length;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("int", $this->expectedType);

        if (strlen($this->result) === $length) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notHaveLength($length, $reason = "")
    {
        $this->expected = $length;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("int", $this->expectedType);

        if (strlen($this->result) !== $length) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beWhitespace($reason = "")
    {
        $this->expected = "whitespace";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->enforceType("string", $this->resultType);

        if (ctype_space($this->result)) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeWhitespace($reason = "")
    {
        $this->expected = "whitespace";
        $this->expectedType = "type";
        $this->reason = $reason;

        $this->negativeComparison = true;

        $this->enforceType("string", $this->resultType);

        if (ctype_space($this->result) === false) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function beEquivalentTo($expected, $reason = "")
    {
        $this->expected = $expected;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (strtolower($this->result) === strtolower($this->expected)) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }

    public function notBeEquivalentTo($expected, $reason = "")
    {
        $this->expected = $expected;
        $this->expectedType = TypeChecker::getType($this->expected);
        $this->reason = $reason;

        $this->checkArgumentNullOrEmpty($this->result, "result");
        $this->checkArgumentNullOrEmpty($this->expected, "expected");
        $this->enforceType("string", $this->resultType);
        $this->enforceType("string", $this->expectedType);

        if (strtolower($this->result) !== strtolower($this->expected)) {
            $this->passTest();
        } else {
            throw new FluentAssertionException($this->buildFailureReason());
        }
    }


    // Arrays

    public function haveCount($count, $reason = "")
    {
        $this->enforceType("array", $this->resultType);
        $this->enforceType("int", TypeChecker::getType($count));

        $this->checkArgumentNullOrEmpty($count, "expected");

        self::assertThat(count($this->result) === $count, self::isTrue(), $reason);
    }

    public function notHaveCount($count, $reason = "")
    {
        $this->enforceType("array", $this->resultType);
        $this->enforceType("int", TypeChecker::getType($count));

        $this->checkArgumentNullOrEmpty($count, "expected");

        self::assertThat(count($this->result) !== $count, self::isTrue(), $reason);
    }

    public function containItem($needle, $reason = "")
    {
        $this->enforceType("array", $this->resultType, "result");

        $result = array_search($needle, $this->result);

        self::assertThat($result !== false, self::isTrue(), $reason);
    }

    public function notContainItem($needle, $reason = "")
    {
        $this->enforceType("array", $this->resultType, "result");

        $result = array_search($needle, $this->result);

        self::assertThat($result === false, self::isTrue(), $reason);
    }


    // Helper Functions

    // private function enforceType($typeName, $variableType, $param)
    // {
    //     if ($variableType !== $typeName) {
    //         throw new InvalidArgumentException("Expected type: {$typeName}, but provided '{$param}' value was type: {$variableType}");
    //     }
    // }

    private function enforceType($typeWanted, $value)
    {
        if ($typeWanted !== $value) {
            throw new FluentAssertionException("Invalid type: wanted type \"{$typeWanted}\" but was actually type \"{$value}\"");
        }
    }

    private function checkArgumentNullOrEmpty($arg, $param)
    {
        if ($arg === null || empty($arg)) {
            throw new FluentAssertionException("Invalid: Value provided for '{$param}' parameter was empty or null");
        }
    }

    private function buildFailureReason()
    {
        $result = $this->result;
        $expected = $this->expected;
        $comparison = ($this->negativeComparison) ? " not " : " " ;

        // Handle true/false which would otherwise show up as "1" and "0" in the reason
        if ($this->resultType == "bool") {
            $result = ($result) ? "true" : "false";
        }
        if ($this->expectedType == "bool") {
            $expected = ($expected) ? "true" : "false";
        }

        // Handle null which would otherwise show up as "" in the reason
        if ($this->resultType == "null"
            || $this->resultType == "array"
            || $this->resultType == "callable"
            || $this->resultType == "object"
            ) {
            $result = $this->resultType;
        }
        if ($this->expectedType == "null"
            || $this->expectedType == "array"
            || $this->expectedType == "callable"
            || $this->expectedType == "object"
            ) {
            $expected = $this->expectedType;
        }

        // Handle strings
        if ($this->resultType == "string") {
            $result = "\"" . $result . "\"";
        }
        if ($this->expectedType == "string") {
            $expected = "\"" . $expected . "\"";
        }

        $reason = "Expected {$result} to{$comparison}be {$expected}";

        if ($this->reason != null) {
            if ($this->startsWith($this->reason, "because") || $this->startsWith($this->reason, "Because")) {
                $reason .= " {$this->reason}";
            } else {
                $reason .= " because {$this->reason}";
            }
        }

        return $reason;
    }

    private function startsWith($haystack, $needle)
    {
        // Search backwards through the string
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    private function passTest()
    {
        $this->assertTrue(true);
    }
}
