<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminBrandsEditTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminbrandsedit()
    {
        $response = $this->get('/admin/brand/$id/edit');

        $response->assertStatus(200);
    }
}
