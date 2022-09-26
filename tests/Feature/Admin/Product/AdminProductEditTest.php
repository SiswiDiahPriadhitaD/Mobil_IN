<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminProductEditTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminproductedit()
    {
        $response = $this->get('/admin/product/edit');

        $response->assertStatus(200);
    }
}
