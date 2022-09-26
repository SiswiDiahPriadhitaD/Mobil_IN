<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_profileuser()
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);
    }
}
