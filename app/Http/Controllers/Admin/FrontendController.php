<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
