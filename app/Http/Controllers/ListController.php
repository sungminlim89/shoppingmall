<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    /**
     * get designers list
     *
     * @param int $gender 0:male, 1:female default:male
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View listView, List of designers
     */
    public function show($gender = 0) {

        $designers = DB::table('designers')->select('name')->where('gender', $gender)->get();
        return view('main.list')->with('designers', json_decode($designers, true));
    }

}
