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
     * Set session data.
     *
     * @param array $data
     */
    public function setSession(array $data)
    {
        foreach ($data as $key => $value ) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Get session data.
     *
     * @param null $value
     *
     * @return mixed
     */
    public function getSessionValue($value = null)
    {
        return $_SESSION[$value];
    }

    public function getSession()
    {
        return $_SESSION;
    }

    public function sessionExistValue(string  $string)
    {
        $return = false;
        if (isset($_SESSION[$string])) {
            $return = true;
        }

        return $return;
    }

    /**
     * Set session lifetime.
     *
     * @param \App\Controller\int $time
     */
    public function setSessionLifeTime(int $time)
    {
        session_set_cookie_params($time);
    }

    public function sessionStart()
    {
        session_start();
    }

    public function sessionDestroy()
    {
        session_destroy();
    }
}
