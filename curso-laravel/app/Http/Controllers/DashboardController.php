<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        //var_dump($request->query('title')); die;
        //dd($request->query('title', 'Valor Default'));
        return view('test', [
            'title' => $request->query('title', 'Valor Default')
        ]);
    }
}
