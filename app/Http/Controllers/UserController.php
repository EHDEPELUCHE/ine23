<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use  Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $user = Auth::user();
        if ($request->oldPass != "") {
            if (!Hash::check($request->oldPass, $user->password))
                return back()->withInput()->withErrors(['oldPass' => 
                    ['La contraseña original no coincide.']]);
            else if ($request->newPass == "" || $request->newPass != $request->repeatedPass)
                return back()->withInput()->withErrors(['newPass' => 
                    ['La nueva contraseña está vacía o mal repetida.']]);
            else 
                $user->password = Hash::make($request->newPass);
        }
        $user->name = $request->name;
        $user->save();
        return back()->with(['success' => ['Los datos han sido modificados.']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout() { 
        Auth::logout();
        return redirect('/');
    }
}
