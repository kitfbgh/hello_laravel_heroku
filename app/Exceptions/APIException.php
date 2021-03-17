<?php

namespace App\Exceptions;

use Exception;

class APIException extends Exception
{
    /**
     * APIException constructor
     * @param string $message
     * @param string $code
     */
    public function __construct(
        $message = 'API',
        $code = 500
    )
    {
        parent::__construct($message, $code);
    }
}
