<?php

namespace App\Infrastructure\Controller;

use App\Application\Feature\RegisterUser\ExistsUserException;
use App\Application\Feature\RegisterUser\RegisterUserFeature;
use App\Infrastructure\Security\AppCustomAuthenticator;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * RegisterController
 */
class RegisterController extends AbstractController
{
    /**
     * @var RegisterUserFeature
     */
    private $registerUserFeature;

    /**
     * @var AppCustomAuthenticator
     */
    private $appCustomAuthenticator;

    public function __construct(RegisterUserFeature $registerUserFeature, AppCustomAuthenticator $appCustomAuthenticator)
    {
        $this->registerUserFeature = $registerUserFeature;
        $this->appCustomAuthenticator = $appCustomAuthenticator;
    }

    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('register/register.html.twig', ['error' => null]);
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function register(Request $request): Response
    {
        try {
            $user = $this->registerUserFeature->register($request->get('email'), $request->get('password'));
        } catch (Exception $exception) {
            return $this->render('register/register.html.twig', ['error' => $exception->getMessage()]);
        }

        return $this->redirectToRoute('app.login.index');
    }
}
