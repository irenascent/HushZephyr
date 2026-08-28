<?php
/**
 * Tests for HushZephyr
 */

use PHPUnit\Framework\TestCase;
use Hushzephyr\Hushzephyr;

class HushzephyrTest extends TestCase {
    private Hushzephyr $instance;

    protected function setUp(): void {
        $this->instance = new Hushzephyr(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hushzephyr::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
