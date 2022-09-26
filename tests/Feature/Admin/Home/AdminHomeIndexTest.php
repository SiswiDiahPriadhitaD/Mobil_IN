<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminHomeIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_AdminHomeIndexTest()
    {
        $response = $this->get('/admin/home');

        $response->assertStatus(200);
    }
}
