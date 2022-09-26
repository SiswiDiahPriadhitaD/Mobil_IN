<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowHomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_showhome()
    {
        $response = $this->get('/product/$id/show');

        $response->assertStatus(200);
    }
}
