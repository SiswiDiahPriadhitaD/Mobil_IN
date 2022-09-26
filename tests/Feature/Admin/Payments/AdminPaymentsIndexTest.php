<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPaymentsIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminpaymentsindex()
    {
        $response = $this->get('/admin/payment');

        $response->assertStatus(200);
    }
}
