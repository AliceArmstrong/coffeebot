<?php

namespace App\Http\Controllers;

use App\Slack;

// use Illuminate\Http\Request;
// use App\Repositories\ResponseRepository;

class ProductTypeController extends Controller
{

    public function __construct(ProductTypeInterface $productType, ResponseRepository $response)
    {
        $this->sendPairing();
    }

    public function sendPairing(Request $request)
    {
        Slack::to('@alicearmstrong')->send('Hello world');
    }
}
