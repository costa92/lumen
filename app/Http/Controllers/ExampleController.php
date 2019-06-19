<?php

namespace App\Http\Controllers;

use App\Services\SomeHprosePublishServices;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function hprose()
    {
       $result = (new SomeHprosePublishServices())->test();
       print_r($result);
    }
}
