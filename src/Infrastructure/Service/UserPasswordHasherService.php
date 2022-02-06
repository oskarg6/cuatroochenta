<?php

namespace App\Infrastructure\Service;

use App\Application\Service\CreateUser\UserPasswordHasherInterface as CreateUserService;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;

/**
 * Is necessary to respect layer architecture
 *
 * UserPasswordHasherService
 */
class UserPasswordHasherService extends UserPasswordHasher implements CreateUserService
{
    public function __construct(PasswordHasherFactoryInterface $hasherFactory)
    {
        parent::__construct($hasherFactory);
    }
}