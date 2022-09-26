<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminBrandsCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminbrandscreate()
    {
        $response = $this->get('/admin/brand/create');

        $response->assertStatus(200);
    }
}
