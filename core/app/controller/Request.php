<?php 
namespace App\Controller;

/**
 * Class Request
 *
 * @package App\Controller
 */
class Request
{
    /**
     * @param mixed ...$args
     *
     * @return array|bool
     */
    protected function getPostRequest(...$args)
    {
        $postData = [];

        foreach ($args as $arg) {
            $postData[] = $_POST[$arg];
        }

        if (empty($postData)) {
            return false;
        }

        return $postData;
    }

    /**
     * @param mixed ...$args
     *
     * @return array|bool
     */
    public function getPost(...$args)
    {
        return $this->getPostRequest($args);
    }

    /**
     * @param mixed ...$args
     *
     * @return array|bool
     */
    protected function getGetRequest(...$args)
    {
        $postData = [];

        foreach ($args as $arg) {
            $postData[] = $_GET[$arg];
        }

        if (empty($postData)) {
            return false;
        }

        return $postData;
    }

    /**
     * @param mixed ...$args
     *
     * @return array|bool
     */
    public function getParameters(...$args)
    {
        return $this->getGetRequest($args);
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $_REQUEST;
    }

    /**
     * @return bool
     */
    public function requestIsPost()
    {
        if (!empty($this->getPost())) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function requestIsGet()
    {
        if (!empty($this->getParameters())) {
            return true;
        }

        return false;
    }
}
