<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowTransactionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_showtransaction()
    {
        $response = $this->get('/transaction/$id_transaction/show');

        $response->assertStatus(200);
    }
}
