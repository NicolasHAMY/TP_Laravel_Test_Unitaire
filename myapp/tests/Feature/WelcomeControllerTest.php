<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

// Ancien use pour test case
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class WelcomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetPageWelcome()
    {
        $response = $this->call('GET', 'welcome');
        $response->assertStatus(200);
    }
}
