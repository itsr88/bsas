<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function updateProjectValue(Request $request)
    {
        $data = $request->all();
        var_dump($data);
    }
}
