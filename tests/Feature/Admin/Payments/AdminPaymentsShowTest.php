<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPaymentsShowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminpaymentsshow()
    {
        $response = $this->get('/admin/payment/$id/show');

        $response->assertStatus(200);
    }
}
