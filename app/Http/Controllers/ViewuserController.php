<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewuserController extends Controller
{
    public function viewusers()
    {
        $viewuser = DB::table('users')->get();
        return view('adminpanel.viewusers', compact('viewuser'));
    }
    public function admin($id)
    {
        DB::table('users')->where('id', $id)->update([
            'role' => 'admin',
        ]);
        return redirect()->route('viewusers');
    }
}