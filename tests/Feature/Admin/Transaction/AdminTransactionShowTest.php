<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTransactionShowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admintransactionshow()
    {
        $response = $this->get('/admin/transaction/$id/show');

        $response->assertStatus(200);
    }
}
