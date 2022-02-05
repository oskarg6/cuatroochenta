<?php
namespace App\Application\Service;

use App\Domain\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * CreateUserService
 */
class CreateUserService
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * @param string $email
     * @param string $password
     *
     * @return User
     */
    public function create(string $email, string $password): User
    {
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($this->passwordHasher->hashPassword($user, $password));
        $user->setRoles(['ROLE_USER']);

        return $user;
    }
}
