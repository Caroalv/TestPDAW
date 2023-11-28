<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class AboutPageTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/graficas');

        $response->assertStatus(200);
    }
}

