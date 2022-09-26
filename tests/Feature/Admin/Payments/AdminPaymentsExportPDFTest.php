<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPaymentsExportPDFTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_adminpaymentsexportpdf()
    {
        $response = $this->get('/admin/payment/export');

        $response->assertStatus(200);
    }
}
