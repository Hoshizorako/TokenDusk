<?php
/**
 * Tests for TokenDusk
 */

use PHPUnit\Framework\TestCase;
use Tokendusk\Tokendusk;

class TokenduskTest extends TestCase {
    private Tokendusk $instance;

    protected function setUp(): void {
        $this->instance = new Tokendusk(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokendusk::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
