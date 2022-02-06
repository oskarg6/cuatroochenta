<?php

namespace App\Application\Service\CreateUser;

/**
 * UserPasswordHasherInterface
 */
interface UserPasswordHasherInterface
{
    public function hashPassword($user, string $plainPassword): string;
}