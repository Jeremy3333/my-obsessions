<?php
use PHPUnit\Framework\TestCase;

require 'src/router.php';

class RouterTest extends TestCase
{
    public function testHomePage()
    {
        $result = handleRequest('/');
        $this->assertEquals(200, $result['code']);
        $this->assertEquals('src/home.php', $result['file']);
    }

    public function testUnknownPage()
    {
        $result = handleRequest('/about');
        $this->assertEquals(404, $result['code']);
        $this->assertNull($result['file']);
    }

    public function testEmptyUri()
    {
        $result = handleRequest('');
        $this->assertEquals(200, $result['code']);
        $this->assertEquals('src/home.php', $result['file']);
    }
}
?>