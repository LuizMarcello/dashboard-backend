<?php

namespace App\Http\Controllers\ApiDash;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        /* $clients = [
            [
                'id' => 1,
                'name' => 'José Ricardo',
                'email' => 'jose@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'José RMarcello',
                'email' => 'joseMarcello@gmail.com'
            ],
            [
                'id' => 3,
                'name' => 'Gabriel Silva Marcello',
                'email' => 'gabrielsMarcello@gmail.com'
            ]
        ]; */

        $products = [
            [
                'id' => 1,
                'name' => 'Video game',
                'value' => '10.50'
            ],
            [
                'id' => 2,
                'name' => 'X Box',
                'value' => '44.50'
            ]
        ];

        return response()->json([
            'clienttts' => $clients,
            'producttts' => $products
        ]);
    }
}
