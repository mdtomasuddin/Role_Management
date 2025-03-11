<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $roles = $user->roles;
        return response()->json($roles);
    }
}
