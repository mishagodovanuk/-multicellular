<?php

namespace App\Controller;

/**
 * Class Session
 *
 * @package App\Controller
 */
class Session
{
    /**
     * @param array $data
     */
    public function setSession(array $data)
    {
        foreach ($data as $key => $value ) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * @param null $value
     *
     * @return mixed
     */
    public function getSessionData($value = null)
    {
        return $_SESSION[$value];
    }

    /**
     * @param \App\Controller\int $time
     */
    public function setSessionLifeTime(int $time)
    {
        session_set_cookie_params($time);
    }
}
