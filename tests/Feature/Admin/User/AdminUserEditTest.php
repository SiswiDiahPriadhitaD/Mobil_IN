<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminUserEditTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminuseredit()
    {
        $response = $this->get('/admin/user/$id/edit');

        $response->assertStatus(200);
    }
}
