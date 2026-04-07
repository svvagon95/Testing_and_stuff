<?php

use App\User;

it('creates a user with correct data', function () {
    $user = new User('Ivan', 'Petrov', 'ivan@example.com');

    expect($user)->toBeInstanceOf(User::class);
    expect($user->getFirstName())->toBe('Ivan');
    expect($user->getLastName())->toBe('Petrov');
    expect($user->getEmail())->toBe('ivan@example.com');
});

it('returns full name', function () {
    $user = new User('Ivan', 'Petrov', 'ivan@example.com');

    expect($user->getFullName())->toBe('Ivan Petrov');
});