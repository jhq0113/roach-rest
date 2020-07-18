<?php
/**
 * Created by PhpStorm.
 * User: Jiang Haiqiang
 * Date: 2020/7/18
 * Time: 6:32 PM
 */
namespace roach\rest\base;

use roach\Roach;

/**
 * Class IController
 * @package roach\rest\base
 * @datetime 2020/7/18 6:32 PM
 * @author roach
 * @email jhq0113@163.com
 */
class IController extends Roach
{
    /**
     * @var string
     * @datetime 2020/7/18 6:32 PM
     * @author roach
     * @email jhq0113@163.com
     */
    public $id;

    /**
     * @var string
     * @datetime 2020/7/18 6:32 PM
     * @author roach
     * @email jhq0113@163.com
     */
    public $actionId;

    /**
     * @return bool
     * @datetime 2020/7/18 10:10 PM
     * @author roach
     * @email jhq0113@163.com
     */
    public function before()
    {
        return true;
    }

    /**
     * @param mixed $result
     * @return mixed
     * @datetime 2020/7/18 10:10 PM
     * @author roach
     * @email jhq0113@163.com
     */
    public function after($result)
    {
        return $result;
    }
}