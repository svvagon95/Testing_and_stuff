<?php

namespace Tests;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCanBeCreated(): void
    {
        $user = new User('Ivan', 'Petrov', 'ivan@example.com');

        $this->assertInstanceOf(User::class, $user);
        $this->assertSame('Ivan', $user->getFirstName());
        $this->assertSame('Petrov', $user->getLastName());
        $this->assertSame('ivan@example.com', $user->getEmail());
    }

    public function testUserFullName(): void
    {
        $user = new User('Ivan', 'Petrov', 'ivan@example.com');

        $this->assertSame('Ivan Petrov', $user->getFullName());
    }
}
