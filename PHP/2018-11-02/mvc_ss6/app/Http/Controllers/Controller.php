<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $users = DB::table('users')->get();

        return view('list_users', ['users' => $users]);
    }
    public function showUser($Id) /*truyen tham so $id lay tu route qua*/
    {
        $users = DB::table('users')->where('Id', $Id)->get();
        return view('Show_users', ['users' => $users]);
    }
    
}