<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\ContactModel;
use App\Models\franchisingModel;
use App\Models\menuModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $list_menu = menuModel::query()
            ->StatusActive()
            ->select('*')
            ->orderBy('order', 'ASC')
            ->get();
        $list = AboutModel::find(1);

        return view('pages.index', compact('list_menu', 'list'));
        // return view('pages.index');
    }

    public function franchising()
    {

        return view('pages.franchising');
    }

    public function franchisingform(Request $request)
    {

        franchisingModel::create([


            'name' => $request->name,
            'email' => $request->email,
            'tel'   => $request->tel,
            'sellerCity' => $request->sellerCity,
            'sellerDistrict' => $request->sellerDistrict,
            'message'   => $request->message

        ]);
        $a = alert()->success('Başarılı!')->showConfirmButton('Tamam', '#3085d6')->persistent(true, true);

        return redirect()->route('franchising');
        
    }
}
