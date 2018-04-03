<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Larcasts\Flash\Flash;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $user);
    }
    
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('se a registrado ' . $user->name . " de forma exitosa")->success();
        return redirect()->route('users.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

}
