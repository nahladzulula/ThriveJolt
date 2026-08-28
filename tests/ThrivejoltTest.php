<?php
/**
 * Tests for ThriveJolt
 */

use PHPUnit\Framework\TestCase;
use Thrivejolt\Thrivejolt;

class ThrivejoltTest extends TestCase {
    private Thrivejolt $instance;

    protected function setUp(): void {
        $this->instance = new Thrivejolt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Thrivejolt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
