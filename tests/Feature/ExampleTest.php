<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // مستقیم به کلوزر ساده بدون دیتابیس مراجعه می‌کنه
        $response = $this->get('/mock');

        $response->assertStatus(200);
        $response->assertSeeText('OK');
    }
}
