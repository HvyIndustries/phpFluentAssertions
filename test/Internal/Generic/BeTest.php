<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $data = true;

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "this reason doesn't have because at the start");
    }

    public function testInt()
    {
        $data = 1;

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }

    public function testFloat()
    {
        $data = 3.14;

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }

    public function testString()
    {
        $data = "nevada";

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }

    public function testArray()
    {
        $data = array("1st", "2nd");

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }

    public function testNull()
    {
        $data = null;

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $data = function() { return "test"; };

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }

    public function testObject()
    {
        $data = new stdClass();

        $this->assert($data)->should()->be($data);
        $this->assert($data)->should()->be($data, "because happy path");
        $this->assert($data)->should()->be($data, "happy path");
    }
}
