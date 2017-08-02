<?php

class HelloTest extends PHPUnit_Framework_TestCase {

    function testA1() {
        $this->assertEquals(2, 1 + 1);
    }

    function testA2() {
        $t = new Hello();

        $this->assertTrue($t->index());
    }
}


