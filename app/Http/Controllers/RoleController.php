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

    public function OnlyForAdmin(Request $request)
    {
        // $user = $request->user();
        // if ($user->roles->contains('name', 'admin')) {
        //     return response('Only for Admin');
        // }
        // abort(403);

        return response('Only for Admin');
    }

    public function OnlyForEditor(Request $request)
    {
        // $user = $request->user();
        // if ($user->roles->contains('name', 'editor')) {
        //     return response('Only for editor');
        // }
        // abort(403);
        return response('Only for editor');
    }

    public function OnlyForAuthor(Request $request)
    {
        return response('Only for Author');
    }

    public function secretMessage(Request $request){
        // $secret=$request->input('password');
        // if($secret !== 'secret'){
        //     abort(401);
        // }
        return response('this is a secret message');
    }

    public function BlogDeshboard(){
        return view('fronted.blog-deshboard');
    }
}
