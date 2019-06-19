<?php
/**
 * VerifyCsrfToken.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/6/16 9:06 PM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Http\Middleware;


class VerifyCsrfToken
{
    protected $except = [
        'api' // OR 'api*'
    ];
}