<?php

namespace App\Http\Controllers;

use App\Models\ContactMessageModel;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    
    public function index(){

    $list       =       ContactMessageModel::all();

        return view('admin.message',compact('list'));
    }


    public function delete(Request $request){

    $messageID      =       $request->MessageID;

    ContactMessageModel::where('id',$messageID)
    ->delete();

    return response()->json(['Message'=>'Başarılı'],200);

    }
}
