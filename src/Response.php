<?php
namespace roach\rest;

use roach\extensions\ECli;
use roach\extensions\IExtension;

/**
 * Class Response
 * @package roach\rest
 * @datetime 2020/7/14 4:50 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Response extends IExtension
{
    const HTTP_CONTINUE               = 100;

    const HTTP_SWITCHING_PROTOCOLS    = 101;

    const HTTP_OK                     = 200;

    //新资源被创建
    const HTTP_CREATED                = 201;

    //已接受处理请求但尚未完成（异步处理）
    const HTTP_ACCEPTED               = 202;

    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;

    //无内容
    const HTTP_EMPTY                  = 204;

    const HTTP_RESET_CONTENT          = 205;

    const HTTP_PARTIAL_CONTENT        = 206;

    const HTTP_MULTIPLE_CHOICES       = 300;

    //资源的URI已更改
    const HTTP_MOVED_PERMANENTLY      = 301;

    const HTTP_FOUND                  = 302;

    const HTTP_SEE_OTHER                  = 303;

    //资源未更改
    const HTTP_NOT_MODIFIED           = 304;

    //坏请求
    const HTTP_BAD_REQUEST            = 400;

    const HTTP_UNAUTHORIZED           = 401;

    const HTTP_PAYMENT_REQUIRED       = 402;

    const HTTP_FORBIDDEN              = 403;

    //资源不存在
    const HTTP_NOT_FOUND              = 404;

    const HTTP_METHOD_NOT_ALLOWED     = 405;

    //服务端不支持所需表示
    const HTTP_NOT_ACCEPTABLE         = 406;

    //冲突
    const HTTP_CONFLICT               = 409;

    //前置条件失败
    const HTTP_PRECONDITION_FAILED    = 412;

    const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;

    const HTTP_REQUEST_URI_TOO_LARGE  = 414;

    //接受到的表示不受支持
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;

    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    //服务器内部错误
    const HTTP_INTERNAL_SERVER_ERROR  = 500;

    //网关错误
    const HTTP_BAD_GATEWAY            = 502;

    //服务当前无法处理请求
    const HTTP_SERVICE_UNAVAILABLE    = 503;

    //网关超时
    const HTTP_GATEWAY_TIME_OUT       = 504;

    const HTTP_MAP = [
        self::HTTP_CONTINUE            => 'HTTP/1.1 100 Continue',
        self::HTTP_SWITCHING_PROTOCOLS => "HTTP/1.1 101 Switching Protocols",
        self::HTTP_OK                  => "HTTP/1.1 200 OK",
        self::HTTP_CREATED             => "HTTP/1.1 201 Created",
        self::HTTP_ACCEPTED            => "HTTP/1.1 202 Accepted",
        self::HTTP_NON_AUTHORITATIVE_INFORMATION => "HTTP/1.1 203 Non-Authoritative Information",
        self::HTTP_EMPTY               => "HTTP/1.1 204 No Content",
        self::HTTP_RESET_CONTENT       => "HTTP/1.1 205 Reset Content",
        self::HTTP_PARTIAL_CONTENT     => "HTTP/1.1 206 Partial Content",
        self::HTTP_MULTIPLE_CHOICES    => "HTTP/1.1 300 Multiple Choices",
        self::HTTP_MOVED_PERMANENTLY => "HTTP/1.1 301 Moved Permanently",
        self::HTTP_FOUND => "HTTP/1.1 302 Found",
        self::HTTP_SEE_OTHER => "HTTP/1.1 303 See Other",
        self::HTTP_NOT_MODIFIED => "HTTP/1.1 304 Not Modified",
        self::HTTP_BAD_REQUEST => "HTTP/1.1 400 Bad Request",
        self::HTTP_UNAUTHORIZED => "HTTP/1.1 401 Unauthorized",
        self::HTTP_PAYMENT_REQUIRED => "HTTP/1.1 402 Payment Required",
        self::HTTP_FORBIDDEN => "HTTP/1.1 403 Forbidden",
        self::HTTP_NOT_FOUND => "HTTP/1.1 404 Not Found",
        self::HTTP_METHOD_NOT_ALLOWED => "HTTP/1.1 405 Method Not Allowed",
        self::HTTP_NOT_ACCEPTABLE => "HTTP/1.1 406 Not Acceptable",
        self::HTTP_REQUEST_ENTITY_TOO_LARGE => "HTTP/1.1 413 Request Entity Too Large",
        self::HTTP_REQUEST_URI_TOO_LARGE => "HTTP/1.1 414 Request-URI Too Large",
        self::HTTP_UNSUPPORTED_MEDIA_TYPE => "HTTP/1.1 415 Unsupported Media Type",
        self::HTTP_REQUESTED_RANGE_NOT_SATISFIABLE => "HTTP/1.1 416 Requested range not satisfiable",
        self::HTTP_INTERNAL_SERVER_ERROR => "HTTP/1.1 500 Internal Server Error",
        self::HTTP_BAD_GATEWAY => "HTTP/1.1 502 Bad Gateway",
        self::HTTP_SERVICE_UNAVAILABLE => "HTTP/1.1 503 Service Unavailable",
        self::HTTP_GATEWAY_TIME_OUT => "HTTP/1.1 504 Gateway Time-out"
    ];

    /**
     * @param int    $httpCode
     * @param string $body
     * @datetime 2020/7/18 11:09 PM
     * @author roach
     * @email jhq0113@163.com
     */
    public static function response($httpCode, $body)
    {
        if(!ECli::cli()) {
            header(self::HTTP_MAP[ $httpCode ]);
        }
        echo $body;
    }
}