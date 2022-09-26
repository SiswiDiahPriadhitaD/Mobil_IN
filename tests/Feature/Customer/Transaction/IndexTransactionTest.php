<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTransactionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_indextransaction()
    {
        $response = $this->get('/transaction');

        $response->assertStatus(200);
    }
}
