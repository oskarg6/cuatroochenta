<?php

namespace App\Application\Feature\RegisterSensor;

use Exception;
use Throwable;

class NotExistsSensorTypeException extends Exception
{

    public function __construct(int $id, Throwable $previous = null)
    {
        $message = 'Not exists a Sensor Type with id: '.$id;
        $code = 400;
        parent::__construct($message, $code, $previous);
    }
}