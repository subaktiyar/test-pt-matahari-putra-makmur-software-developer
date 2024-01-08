<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkuranController extends Controller
{
    public function showForm(Request $request)
    {
        $selectedOption = $request->session()->get('selectedOption', 'kecil');

        return view('ukuran.form', compact('selectedOption'));
    }

    public function saveOption(Request $request)
    {
        $request->validate([
            'ukuran' => 'required|in:kecil,sedang,besar',
        ]);

        $request->session()->put('selectedOption', $request->input('ukuran'));

        return redirect()->route('ukuran.form');
    }
}