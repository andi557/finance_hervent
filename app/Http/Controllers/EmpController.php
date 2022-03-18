<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class EmpController extends Controller
{
    public function getAllDatas()
    {

        $datas = Data::all();
        return view('data', compact('datas'));

    }
}
