<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageAvailable()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testRegistrationAction()
    {
        $response = $this->post('/register');

        $response->assertStatus(30);
    }
}
