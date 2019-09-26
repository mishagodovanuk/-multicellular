<?php
namespace App\Controller;

/**
 * Class Cookies
 *
 * @package App\Controller
 */
class Cookies
{
    /**
     * Set cookies.
     *
     * @param string $name
     * @param $value
     */
    public function setCookies(string $name, $value)
    {
        setcookie($name, $value);
    }

    /**
     * Get cookies.
     *
     * @param \App\Controller\string $name
     *
     * @return mixed
     */
    public function getCookies(string $name)
    {
        return $_COOKIE[$name];
    }

    /**
     * Delete cookies.
     *
     * @param \App\Controller\string $name
     */
    public function deleteCookie(string $name)
    {
        unset($_COOKIE[$name]);
    }
}
