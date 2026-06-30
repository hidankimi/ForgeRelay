<?php
/**
 * Tests for ForgeRelay
 */

use PHPUnit\Framework\TestCase;
use Forgerelay\Forgerelay;

class ForgerelayTest extends TestCase {
    private Forgerelay $instance;

    protected function setUp(): void {
        $this->instance = new Forgerelay(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgerelay::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
