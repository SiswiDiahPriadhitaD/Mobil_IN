<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexHomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_indexhome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
