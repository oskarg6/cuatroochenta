<?php
namespace App\Application\Feature\RegisterUser;

use App\Domain\Entity\User;

class RegisterUserFeature
{
    /**
     * @var CreateUserServiceInterface
     */
    private $createUserService;

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(CreateUserServiceInterface $createUserService, UserRepositoryInterface $userRepository)
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