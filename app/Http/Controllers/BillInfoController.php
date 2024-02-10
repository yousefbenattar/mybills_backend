<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillInfo;

class BillInfoController extends Controller
{
    public function index()
    {
        $info = BillInfo::first();
        return json_decode($info);
    }
    public function submitinfo(Request $request)
    {
        $info = new BillInfo();
        $info->brand_name=$request->post('brand_name');
        $info->brand_id=$request->post('brand_id');
        $info->due=$request->post('due');
        $info->status=$request->post('status');
        $info->due_info=$request->post('due_info');

        if ($info->save()) {
            return response()->json(['code' => 0, 'msg' => 'Success']);
        }
        return response()->json(['code' => 1, 'msg' => 'fail']);
    }
}
