<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminUserIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminuserindex()
    {
        $response = $this->get('/admin/user');

        $response->assertStatus(200);
    }
}
