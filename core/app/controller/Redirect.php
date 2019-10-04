<?php
namespace App\Controller;

use App\Controller\Url;

/**
 * Class Redirect
 *
 * @package App\Controller
 */
class Redirect
{
    /**
     * Url.
     *
     * @var \App\Controller\Url
     */
    private $url;

    /**
     * Redirect constructor.
     */
    public function __construct()
    {
        $this->url = new Url();
    }

    /**
     * Redirect.
     *
     * @param $path
     */
    public function redirect($path, $data = null)
    {
        $param = '';
        if ($data !== null) {
            $param .= '?';
            foreach ($data as $key => $value) {
                $param .= $key . '=' . $value . '&';
            }

            $param = rtrim($param, '&');
        }

        $redirectPath = "Location:" . $this->url->getHomeUrl();
        header($redirectPath . $path . $param);
    }

    /**
     * Redirect to home.
     */
    public function goHome()
    {
        header($this->url->getHomeUrl());
    }
}
