<?php

namespace App\Controller;

class Url
{
    public function getHomeUrl()
    {
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            '/'
        );
    }

    public function getCurrentUrl()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
