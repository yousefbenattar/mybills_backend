<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillInfo;

class BillInfoController extends Controller
{
    public function index(){
        $info = BillInfo::first();
        return json_decode($info);
    }
}
