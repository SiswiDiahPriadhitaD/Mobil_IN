<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTypesCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admintypescreate()
    {
        $response = $this->get('/admin/type/create');

        $response->assertStatus(200);
    }
}
