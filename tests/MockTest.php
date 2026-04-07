<?php

namespace Tests;

use App\User;
use App\UserRepositoryInterface;
use App\UserService;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class MockTest extends MockeryTestCase
{
    public function testFindUserByEmailIsCalled(): void
    {
        $mock = Mockery::mock(UserRepositoryInterface::class);

        $mock->shouldReceive('findUserByEmail')
            ->once()
            ->with('ivan@example.com')
            ->andReturn(new User('Ivan', 'Petrov', 'ivan@example.com'));

        $service = new UserService($mock);

        $user = $service->getUserByEmail('ivan@example.com');

        $this->assertInstanceOf(User::class, $user);
        $this->assertSame('Ivan Petrov', $user->getFullName());
    }
}