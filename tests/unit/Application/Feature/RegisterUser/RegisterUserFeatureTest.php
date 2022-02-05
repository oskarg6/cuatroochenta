<?php

namespace App\Tests\unit\Application\Feature\RegisterUser;

use App\Application\Feature\RegisterUser\ExistsUserException;
use App\Application\Feature\RegisterUser\RegisterUserFeature;
use App\Application\Feature\RegisterUser\UserRepositoryInterface;
use App\Application\Service\CreateUserService;
use App\Domain\Entity\User;
use Codeception\Test\Unit;
use Exception;
use Mockery;

class RegisterUserFeatureTest extends Unit
{
    private $createUserService;
    private $userRepository;

    protected function _before()
    {
        $user = Mockery::mock(User::class);
        $this->createUserService = Mockery::mock(CreateUserService::class);
        $this->createUserService->shouldReceive('create')->andReturn($user);

        $this->userRepository = Mockery::mock(UserRepositoryInterface::class);
        $this->userRepository->shouldReceive('save');
    }

    public function testRegister()
    {
        $this->userRepository->shouldReceive('getByEmail')->andReturn(null);

        $registerUserFeature = new RegisterUserFeature($this->createUserService, $this->userRepository);
        $user = $registerUserFeature->register(
            'test@email.es',
            'passwordTest'
        );

        $this->assertInstanceOf(User::class, $user);
    }

    public function testRegisterException()
    {
        $user = Mockery::mock(User::class);
        $this->userRepository->shouldReceive('getByEmail')->andReturn($user);

        $registerUserFeature = new RegisterUserFeature($this->createUserService, $this->userRepository);
        try {
            $registerUserFeature->register(
                'test@email.es',
                'passwordTest'
            );

            $this->fail('exception not thrown');
        } catch (Exception $exception) {
            $this->assertInstanceOf(ExistsUserException::class, $exception);
        }
    }
}
