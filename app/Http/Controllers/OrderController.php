<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function newOrder(Request $request)
    {
        try {
            $data = $request->all();

            $order = new Order();

            $order->phone = $data['phone'];
            $order->address = $data['address'];
            $order->total = $data['total'];
            $order->pizza_id = $data['pizza_id'];

            $order->save();
            return response()->json(['resultado' => true], 200);
        } catch (Error $e) {
            return response()->json(['resultado' => 'ERROR NEW ORDER'], 250);
        } catch (Exception $e) {
            return response()->json(['resultado' => 'EXCEPTION NEW ORDER'], 250);
        }
    }
}
