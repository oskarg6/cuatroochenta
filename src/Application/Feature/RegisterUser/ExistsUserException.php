<?php

namespace App\Application\Feature\RegisterUser;

use Exception;
use Throwable;

/**
 * ExistsUserException
 */
class ExistsUserException extends Exception
{
    public function __construct(string $email, Throwable $previous = null)
    {
        $message = 'There is a user with the email: '.$email;
        $code = 400;
        parent::__construct($message, $code, $previous);
    }
}
