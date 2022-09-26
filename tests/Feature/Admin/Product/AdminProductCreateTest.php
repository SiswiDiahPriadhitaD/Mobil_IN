<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminProductCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminproductcreate()
    {
        $response = $this->get('/admin/product/create');

        $response->assertStatus(200);
    }
}
