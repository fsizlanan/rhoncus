<?php

namespace App\Http\Controllers;

use App\Http\Requests\footerRequest;
use App\Models\footerModel;
use Illuminate\Http\Request;

class AdminFooterController extends Controller
{
    public function index()
    {

        $footer = footerModel::find(1);

        return view('admin.footer', compact('footer'));
    }

    public function update(footerRequest $request)
    {

        $data = [
            'facebook' => $request->facebook,
            'twitter'   =>  $request->twitter,
            'pinterest'   =>  $request->pinterest,
            'googleplus'   =>  $request->googleplus,
            'instagram'   =>  $request->instagram,
            'footertext'   =>  $request->footertext,
        ];

        footerModel::where('id', 1)
            ->update($data);

        alert()->success('Başarılı!', 'Kişisel Bilgileriniz Güncellendi')
            ->showConfirmButton('Tamam', '#3085d6')
            ->persistent(true, true);

        return redirect()->back();
    }
}
