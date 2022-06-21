<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register(Request $request)
    {
        if($request->isMethod('post')) {
            $attributes = request()->validate( [
                'firstname'           => ['required', 'min:1', 'max:50'],
                'lastname'            => ['required', 'min:1', 'max:50'],
                'birthday'         => ['required', 'min:1', 'max:50'],
                'bsn'              => ['required', 'min:3', 'max:100'],
                'iban'                  => ['required', 'min:3', 'max:20'],
                'address'            => ['required', 'min:3', 'max:100'],
                'phone_number'              => ['required', 'min:3', 'max:10'],
                'email'           => ['required', 'min:3', 'max:100'],
            ]);

            User::create($attributes);

            return redirect()->route('index')->with('success', 'Je hebt succesvol een rijles ingepland!');
        }
        return view('pages.register')->with([

        ]);
    }
}
