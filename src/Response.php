<?php
namespace roach\rest;

use roach\Roach;

/**
 * Class Response
 * @package roach\rest
 * @datetime 2020/7/14 4:50 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Response extends Roach
{
    const HTTP_OK                     = 200;

    //新资源被创建
    const HTTP_CREATED                = 201;

    //已接受处理请求但尚未完成（异步处理）
    const HTTP_ACCEPTED               = 202;

    //无内容
    const HTTP_EMPTY                  = 204;

    //资源的URI已更改
    const HTTP_MOVED_PERMANENTLY      = 301;

    //资源未更改
    const HTTP_NOT_MODIFIED           = 304;

    //坏请求
    const HTTP_BAD_REQUEST            = 400;

    //资源不存在
    const HTTP_NOT_FOUND              = 404;

    //服务端不支持所需表示
    const HTTP_NOT_ACCEPTABLE         = 406;

    //冲突
    const HTTP_CONFLICT               = 409;

    //前置条件失败
    const HTTP_PRECONDITION_FAILED    = 412;

    //接受到的表示不受支持
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;

    //服务器内部错误
    const HTTP_INTERNAL_SERVER_ERROR  = 500;

    //服务当前无法处理请求
    const HTTP_SERVICE_UNAVAILABLE    = 503;
}