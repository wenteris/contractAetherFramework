<?php
/**
 * Tests for contractAether
 */

use PHPUnit\Framework\TestCase;
use Contractaether\Contractaether;

class ContractaetherTest extends TestCase {
    private Contractaether $instance;

    protected function setUp(): void {
        $this->instance = new Contractaether(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractaether::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
