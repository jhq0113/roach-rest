<?php
namespace roach\rest;

/**
 * Class Request
 * @package roach\rest
 * @datetime 2020/7/14 5:03 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Request
{
    /**
     * @var string
     * @datetime 2020/7/14 5:04 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    protected $_requestMethod;

    /**
     * @return string
     * @datetime 2020/7/14 5:04 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getRequestMethod()
    {
        return $this->_requestMethod;
    }

    /**
     * @var string
     * @datetime 2020/7/14 5:06 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    protected $_host;

    /**
     * @return string
     * @datetime 2020/7/14 5:10 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getHost()
    {
        return $this->_host;
    }

    /**
     * @datetime 2020/7/14 5:05 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function load()
    {
        $this->_requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->_host          = $_SERVER['HTTP_HOST'];
    }
}