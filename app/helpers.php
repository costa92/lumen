<?php
/**
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/6/16 12:27 AM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}