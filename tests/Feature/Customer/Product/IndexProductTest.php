<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_indexproduct()
    {
        $response = $this->get('/login/home');

        $response->assertStatus(200);
    }
}
