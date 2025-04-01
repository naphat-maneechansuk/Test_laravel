<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('create_view');
    }

    public function create(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return redirect('data');
    }

    public function show(){
        $users = User::all();
        return view('data' , compact('users'));
    }

    public function edit_view($id){
        $users = User::find($id);
        return view('edit_view' , compact('users'));
    }

    public function edit(Request $req, $id){
        $users = User::find($id);
        $users->name = $req->name;
        $users->email = $req->email;
        $users->password = $req->password;
        $users->save();
        return redirect('/data');
    }

    public function delete(Request $req){
        $users = User::find($req->id);
        $users->delete();
        return redirect('/data');
    }
}
