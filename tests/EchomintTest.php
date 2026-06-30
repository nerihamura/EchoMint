<?php
/**
 * Tests for EchoMint
 */

use PHPUnit\Framework\TestCase;
use Echomint\Echomint;

class EchomintTest extends TestCase {
    private Echomint $instance;

    protected function setUp(): void {
        $this->instance = new Echomint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echomint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
