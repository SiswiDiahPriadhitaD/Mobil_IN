<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTransactionUnpaidTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admintransactionunpaid()
    {
        $response = $this->get('/admin/transaction/$id/unpaid');

        $response->assertStatus(200);
    }
}
