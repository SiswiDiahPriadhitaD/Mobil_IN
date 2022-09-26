<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTypesIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admintypesindex()
    {
        $response = $this->get('/admin/type');

        $response->assertStatus(200);
    }
}
