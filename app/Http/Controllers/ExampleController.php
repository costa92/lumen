<?php

namespace App\Http\Controllers;

use App\Services\SomeHprosePublishServices;
use Elasticsearch\ClientBuilder;

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

        $data = [
            'body' => [
                'testField' => 'aaa'
            ],
            'index' => 'my_index',
            'type' => 'my_type',
            'id' => 'my_id',
        ];


//        $return = Elasticsearch::index($data);


        $host=['172.18.0.1:9200'];
        $client = ClientBuilder::create()->setHosts($host)->build();
//        $client = ClientBuilder::create()->build();
//        $stats = $client->stats();
        $return = $client->index($data);
//       $result = (new SomeHprosePublishServices())->test();
//       print_r($result);
    }
}
