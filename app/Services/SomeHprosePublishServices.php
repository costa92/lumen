<?php
/**
 * SomeHprosePublishServices.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/6/16 9:09 PM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Services;


class SomeHprosePublishServices extends BaseService
{

    public function test()
    {
        $client = new \Hprose\Socket\Client('tcp://192.168.0.109:9440', false);
        $client->demo();
        echo $client->admin_getByName('test');
    }
}