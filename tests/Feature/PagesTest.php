<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PagesTest extends TestCase
{
    use DatabaseMigrations;
    
    /** @test */
    public function a_user_can_view_the_cookies_details()
    {
        $response = $this->get('/cookies');

        $response->assertStatus(200);
    }
}
