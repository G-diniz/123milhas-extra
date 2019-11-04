<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;


class PizzaController extends Controller
{
    function add(Request $request)
    {
        try {
            $data = $request->all();

            $exists = Pizza::where('pizza_name', $data['pizza_name'])->first();
            if ($exists) {
                return response()->json(['resultado' => 'ALREADY EXISTS'], 200);
            }

            $pizza = new Pizza();

            $pizza->pizza_name = $data['pizza_name'];
            $pizza->size = $data['size'];
            $pizza->flavour = $data['flavour'];

            $pizza->save();

            return response()->json(['resultado' => true], 200);
        } catch (Error $e) {
            return response()->json(['resultado' => 'ERROR ADD'], 250);
        } catch (Exception $e) {
            return response()->json(['resultado' => 'EXCEPTION ADD'], 250);
        }
    }

    function edit(Request $request)
    {
        try {
            $data = $request->all();

            $update = Pizza::where('id', $data['id'])->first();

            if ($update) {
                if ($update->pizza_name == $data['pizza_name']) {
                    return response()->json(['resultado' => 'ALREADY EXISTS'], 250);
                } else {
                    $update->update([
                        'pizza_name' => $data['pizza_name'],
                        'size' => $data['size'],
                        'flavour' => $data['flavour'],
                    ]);

                    return response()->json(['resultado' => true], 200);
                }
            } else {
                return response()->json(['resultado' => 'NOT FOUND'], 250);
            }
        } catch (Error $e) {
            return response()->json(['resultado' => 'ERROR EDIT'], 250);
        } catch (Exception $e) {
            return response()->json(['resultado' => 'EXCEPTION EDIT'], 250);
        }
    }

    function remove(Request $request)
    {
        try {
            $data = $request->all();

            $delete = Pizza::where('id', $data['id'])->delete();

            if ($delete) {
                return response()->json(['resultado' => true], 200);
            } else {
                return response()->json(['resultado' => false], 250);
            }
        } catch (Error $e) {
            return response()->json(['resultado' => 'ERROR REMOVE'], 250);
        } catch (Exception $e) {
            return response()->json(['resultado' => 'EXCEPTION REMOVE'], 250);
        }
    }
}
