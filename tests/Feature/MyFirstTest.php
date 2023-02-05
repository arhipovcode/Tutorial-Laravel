<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertDontSeeText('ntrcn');
        $response->assertDontSeeText('ТекСт');
        $response->assertSeeText('текст');
        $response->assertStatus(200);
    }
}
