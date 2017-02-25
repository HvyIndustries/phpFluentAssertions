<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class ObjectsTest extends FluentAssertionsTestCase
{
    public function testObjectProperty()
    {
        $data = new stdClass();
        $data->myProp = true;

        $this->assert($data->myProp)->should()->beTrue();
        $this->assert($data->myProp)->should()->notBeNull();
    }

    public function testObjectPropertyProperty()
    {
        $data = new stdClass();
        $subData = new stdClass();
        $subData->prop = "hello world";
        $data->myProp = $subData;

        $this->assert($data->myProp)->should()->beObject();
        $this->assert($data->myProp->prop)->should()->beString();
        $this->assert($data->myProp->prop)->should()->be("hello world");
    }
}
