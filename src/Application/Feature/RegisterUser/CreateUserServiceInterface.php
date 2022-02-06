<?php

namespace App\Application\Feature\RegisterUser;

use App\Domain\Entity\User;

/**
 * CreateUserServiceInterface
 */
interface CreateUserServiceInterface
{
    /**
     * @param string $email
     * @param string $password
     *
     * @return User
     */
    public function create(string $email, string $password): User;
}
