<?php

namespace App\core;

class Response
{
    public function setStatusCode($code)
    {
        http_response_code($code);
    }
}