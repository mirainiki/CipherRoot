<?php
/**
 * Tests for CipherRoot
 */

use PHPUnit\Framework\TestCase;
use Cipherroot\Cipherroot;

class CipherrootTest extends TestCase {
    private Cipherroot $instance;

    protected function setUp(): void {
        $this->instance = new Cipherroot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cipherroot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
