<?php

namespace App\Http\Controllers;

use App\Models\menuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){

        $list_menu = menuModel::query()
                ->StatusActive()
                ->select('*')
                ->orderBy('order','ASC')
                ->get();

        return view('pages.menu', compact('list_menu'));

    }


}
