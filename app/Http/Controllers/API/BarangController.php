<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        return Barang::all();
    }

}
