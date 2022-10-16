<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Dotenv\Exception\ValidationException;
use SebastianBergmann\CodeCoverage\Report\Html\dashboard;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('/dashboard/password/edit');
    }

    public function update(Request $request)
    {
        // dd('sukses');
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()
                ->user()
                ->update(['password' => Hash::make($request->password)]);

            return redirect('dashboard/password/edit')->with('success', 'Password Berhasil Diperbaharui');
        }

        throw ValidationException::message([
            'current_password' => 'a',
        ]);
    }
}
