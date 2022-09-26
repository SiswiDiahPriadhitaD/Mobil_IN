<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTransactionIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admintransactionindex()
    {
        $response = $this->get('/admin/transaction');

        $response->assertStatus(200);
    }
}
