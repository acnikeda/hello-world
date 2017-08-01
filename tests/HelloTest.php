class HelloTest.php extends PHPUnit_Framework_TestCase {

    function testTest() {
        $this->assertEquals(2, 1 + 1);
    }

    function testHello() {
        $t = new Hello();

        $this->assertTrue($t->index());
    }
}


