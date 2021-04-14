<?php

namespace App\Http\Controllers;

use App\Models\franchisingModel;
use Illuminate\Http\Request;

class AdminFranchisingController extends Controller
{
    public function index()
    {

        $franchisingList   =   franchisingModel::all();

        return view('admin.franchising', compact('franchisingList'));
    }

    public function delete(Request $request)
    {

        franchisingModel::where('id',$request->MessageID)->delete();
        return response()->json(['Message'=>'Başarılı'],200);
    }
}
