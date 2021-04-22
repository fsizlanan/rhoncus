<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index(){

        $list   =   ContactModel::find(1);


        return view('admin.contact',compact('list'));
    }

    public function add(contactRequest $request){


        ContactModel::where('id',1)
        ->update([

            "ContactHead"           =>      $request->ContactHead,
            "ContactHeadText"       =>      $request->ContactHeadText,
            "ContactAdressHead"     =>      $request->ContactAdressHead,
            "ContactAdressHeadSub"  =>      $request->ContactAdressHeadSub,
            "ContactTelHead"        =>      $request->ContactTelHead,
            "ContactTelHeadSub"     =>      $request->ContactTelHeadSub,
            "ContactMailHead"       =>      $request->ContactMailHead,
            "ContactMailHeadSub"    =>      $request->ContactMailHeadSub,

        ]);

        alert()->success('Başarılı!, İletişim Bilgileriniz Güncellendi')
        ->showConfirmButton('Tamam', '#3085d6')
        ->persistent(true,true);

       return redirect()->route('admin.contact');

    }
    
    
}
