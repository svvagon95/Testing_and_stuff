<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testUserApiReturnsUsers(): void
    {
        $response = file_get_contents('http://localhost:8000/users');

        $this->assertNotFalse($response);

        $data = json_decode($response, true);

        $this->assertIsArray($data);
        $this->assertCount(2, $data);

        $this->assertSame('Ivan Petrov', $data[0]['name']);
    }
}