<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage()
    {
        $response = $this->get('/');

        // $response->assertStatus(200);

        $response->assertSeeText('Larablog');
    }
    public function test_aboutpage()
    {
        $response = $this->get('/about');

        // $response->assertStatus(200);

        $response->assertSeeText('About');
    }
    public function test_contactpage()
    {
        $response = $this->get('/contact');

        // $response->assertStatus(200);

        $response->assertSeeText('Contact');
    }
}
