<?php
namespace App\Application\Feature\RegisterUser;

use App\Application\Service\CreateUserService;
use App\Domain\Entity\User;

class RegisterUserFeature
{
    /**
     * @var CreateUserService
     */
    private $createUserService;

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(CreateUserService $createUserService, UserRepositoryInterface $userRepository)
    {
        $this->createUserService = $createUserService;
        $this->userRepository = $userRepository;
    }

    /**
     * @param string $email
     * @param string $password
     *
     * @return User
     * @throws ExistsUserException
     */
    public function register(string $email, string $password): User
    {
        if (!empty($this->userRepository->getByEmail($email))) {
            throw new ExistsUserException($email);
        }

        $user = $this->createUserService->create($email, $password);
        $this->userRepository->save($user);

        return $user;
    }
}