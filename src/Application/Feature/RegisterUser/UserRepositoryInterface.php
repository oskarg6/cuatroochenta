<?php

namespace App\Application\Feature\RegisterUser;

use App\Domain\Entity\User;

interface UserRepositoryInterface
{
    /**
     * @param string $email
     *
     * @return User|null
     */
    public function getByEmail(string $email): ?User;

    /**
     * @param User $user
     *
     * @return void
     */
    public function save(User $user);
}