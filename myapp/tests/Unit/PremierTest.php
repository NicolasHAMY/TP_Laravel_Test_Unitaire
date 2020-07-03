<?php

namespace Tests\Unit;

// Ancien use pour test case
// use PHPUnit\Framework\TestCase;

use Tests\TestCase;

class PremierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $data = [10, 20, 30];
        $result = array_sum($data);
        $this->assertEquals(60, $result);
    }

}
