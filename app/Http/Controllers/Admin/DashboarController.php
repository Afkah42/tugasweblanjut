<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PegawaiModel;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function index()
    {
        $pegawai = PegawaiModel::count();
        return view('admin.index', compact('pegawai'));
    }
}
