<?php

namespace App\Http\Controllers;

use App\Models\ContactMessageModel;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $list   =   ContactModel::find(1);

        return view('pages.contact', compact('list'));
    }

    public function message(Request $request){

        ContactMessageModel::create([

            'MassageName'   =>   $request->MassageName,
            'MessageEmail'  =>   $request->MessageEmail,
            'MessageSubject'=>   $request->MessageSubject,
            'MessajeText'   =>   $request->message

        ]);

        alert()->success('Başarılı!')
        ->showConfirmButton('Tamam', '#3085d6')
        ->persistent(true,true);

         return redirect()->route('contact');

    }
}
