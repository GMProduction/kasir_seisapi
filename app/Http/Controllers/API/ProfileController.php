<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $id = auth()->id();
            $data = User::with([])
                ->where('id', '=', $id)
                ->first();
            return $this->jsonResponse('success', 200, $data);
        } catch (\Exception $e) {
            return $this->jsonResponse('terjadi kesalahan server (' . $e->getMessage() . ')', 500);
        }
    }
}
