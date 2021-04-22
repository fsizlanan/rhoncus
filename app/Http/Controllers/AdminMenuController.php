<?php

namespace App\Http\Controllers;

use App\Http\Requests\menuRequest;
use App\Models\menuModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Environment\Console;

use function PHPUnit\Framework\isNull;

class AdminMenuController extends Controller
{
    public function list()
    {

        $list   =   menuModel::all();

        return view('admin.menu', compact('list'));
    }

    public function changeStatus(Request $request)
    {

        $newStatus  =   null;
        $id         =   $request->menuID;

        $findMenu   =   menuModel::find($id);
        $status     =   $findMenu->status;

        if ($status) {
            $status     = 0;
            $newStatus  = "Pasif";
        } else {
            $status     = 1;
            $newStatus  = 'Aktif';
        }

        $findMenu->status   =   $status;
        $findMenu->save();

        return response()->json([

            'newStatus' => $newStatus,
            'status'    => $status,
            'MenuID'    => $id,

        ], 200);
    }

    public function addShow(Request $request)
    {

        $id     =   $request->menuID;
        $menu   =   null;

        if (!is_null($id)) {
            $menu   =   menuModel::find($id);
        } else {
        }

        return view('admin.menu_add', compact('menu'));
    }


    public function add(menuRequest $request)
    {
        $status     =   0;
        $order      =   $request->order;

        if ($request->status == 'off') {
            $status = 0;
        }

        if($request->status){
            $status = 1;
        }

        if (isset($request->menuID)) {

            $id     =       $request->menuID;

            $menu       =   menuModel::find($id);

            if (isNull($menu->image)) {

            } else {
                $file               =    $request->file('image');
                $extension          =    $file->getClientOriginalExtension(); //resim uzantısı png gibi
                $fileOriginalName   =    $file->getClientOriginalName();
                $explode            =     explode('.', $fileOriginalName);
                $fileOriginalName   =    Str::Slug($explode[0], '-') . now()->format('d-m-Y_H-i-s') . '.' . $extension;
                Storage::putFileAs('image', $file, $fileOriginalName);

                $menu->image         =     'image/' . $fileOriginalName;
            }
            $menu->MenuName  =   $request->MenuName;
            $menu->MenuPrice  =   $request->MenuPrice;
            $menu->MenuContact =  $request->MenuContact;
            $menu->status     =   $status;
            $menu->order      =   $order ? $order : 999;

            $menu->save();


            alert()->success('Başarılı!', 'Kişisel Bilgileriniz Güncellendi')
                ->showConfirmButton('Tamam', '#3085d6')
                ->persistent(true, true);

            return redirect()->route('admin.menu');
        } else {


            $file               =    $request->file('image');
            $extension          =    $file->getClientOriginalExtension(); //resim uzantısı png gibi
            $fileOriginalName   =    $file->getClientOriginalName();
            $explode            =     explode('.', $fileOriginalName);
            $fileOriginalName   =    Str::Slug($explode[0], '-') . now()->format('d-m-Y_H-i-s') . '.' . $extension;
            Storage::putFileAs('public/image', $file, $fileOriginalName);
            $request->image         =     'image/' . $fileOriginalName;

            menuModel::create([

                'MenuName'   =>   $request->MenuName,
                'MenuPrice'  =>   $request->MenuPrice,
                'MenuContact' =>   $request->MenuContact,
                'status'     =>   $status,
                'order'      =>   $order ? $order : 999,
                'image'      =>   $request->image,


            ]);

            alert()->success('Başarılı!', 'Yeni Menü Eklendi')->showConfirmButton('Tamam', '#3085d6')->persistent(true, true);
            return redirect()->route('admin.menu');  // veritabanı kaydını yaptıktan sonra yönlenecek sayfa


        }
    }
    public function delete(Request $request)
    {

        $menuid     =   $request->menuID;

        menuModel::where('id', $menuid)->delete();  //where sorgusu ile id si gelen değeri sil

        return response()->json([], 200); //gönderilecek herhangi bir data yok

    }
}
