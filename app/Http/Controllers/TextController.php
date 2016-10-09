<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TextController extends Controller {

    public function textArrayJson(Request $request) {

        $data = $request->all();

        if (!is_array($data))
            return false;

        return response()->json([
            'name'=>'whc',
            'age' => 18
        ]);
    }
}