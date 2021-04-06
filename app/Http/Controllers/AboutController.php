<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $list   =   AboutModel::find(1);

        return view('pages.about', compact('list'));
    }
}
