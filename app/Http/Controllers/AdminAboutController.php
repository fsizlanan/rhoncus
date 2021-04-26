<?php

namespace App\Http\Controllers;

use App\Http\Requests\aboutRequest;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function index(){
        $list   =   AboutModel::find(1);
        return view('admin.about',compact('list'));
    }

    public function add(aboutRequest $request){
        AboutModel::where('id',1)
        ->update([

            'aboutHead'     => $request->aboutHead,
            'aboutSubHead'  => $request->aboutSubHead,
            'aboutTextArea' => $request->aboutTextArea,
            'special11'     => $request->special11,
            'special12'     => $request->special12,
            'special1About' => $request->special1About,
       //     'special1Price' => $request->special1Price,
            'special21'     => $request->special21,
            'special22'     => $request->special22,
            'special2About' => $request->special2About,
       //     'special2Price' => $request->special2Price,
            'specialSubHead'=> $request->specialSubHead,

        ]);

        return redirect()->route('admin.about');
    }

}
