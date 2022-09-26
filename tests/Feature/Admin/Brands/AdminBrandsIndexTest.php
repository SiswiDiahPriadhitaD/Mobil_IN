<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminBrandsIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminbrandsindex()
    {
        $response = $this->get('/admin/brand');

        $response->assertStatus(200);
    }
}
