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
     * Get Request POST.
     *
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
     * public Get Post.
     *
     * @param mixed ...$args
     *
     * @return array|bool
     */
    public function getPost(...$args)
    {
        return $this->getPostRequest($args);
    }

    /**
     * Get Request GET.
     *
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
     * public Get GET request.
     *
     * @param mixed ...$args
     *
     * @return array|bool
     */
    public function getParameters(...$args)
    {
        return $this->getGetRequest($args);
    }

    /**
     * Get all requests.
     *
     * @return mixed
     */
    public function getAll()
    {
        return $_REQUEST;
    }

    /**
     * If request is Post.
     *
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
     * Is request is GET.
     *
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
