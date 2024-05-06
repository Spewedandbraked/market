<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\orderedprod;
use Illuminate\Http\Request;

class BucketController extends Controller
{
    public function index($id)
    {
        $order = Order::firstOrCreate(['customer' =>  $id],['track' => uuid_create()]);
        return view('bucket',[
            'products' => orderedprod::all(), 
        ]);
    }
    public function add($prodId, $userId){

    }
    public function remove($prodId, $userId){

    }
}
