<?php

namespace App\Tests\unit\Application\Service;

use App\Application\Service\CreateUserService;
use App\Domain\Entity\User;
use Codeception\Test\Unit;
use Mockery;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CreateUserServiceTest extends Unit
{
    private $userPasswordHasher;

    protected function _before()
    {
        $this->userPasswordHasher = Mockery::mock(UserPasswordHasherInterface::class);
        $this->userPasswordHasher->shouldReceive('hashPassword')->andReturn('passwordHash');
    }

    public function testCreate()
    {
        $createUserService = new CreateUserService($this->userPasswordHasher);

        $user = $createUserService->create(
            'test@email.es',
            'passwordTest'
        );

        $this->assertInstanceOf(User::class, $user);
    }
}
