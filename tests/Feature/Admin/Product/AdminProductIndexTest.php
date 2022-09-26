<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminProductIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminproductIndex()
    {
        $response = $this->get('/admin/product');

        $response->assertStatus(200);
    }
}
