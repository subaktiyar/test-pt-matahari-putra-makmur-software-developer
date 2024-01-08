<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function showForm(Request $request)
    {
        $data = [
            ["id"=>1, "nama" => "Cahyady"],
            ["id"=>2, "nama" => "Dedy"],
            ["id"=>3, "nama" => "Corbuzier"],
            ["id"=>4, "nama" => "Gilang"],
            ["id"=>5, "nama" => "Putra"],
            ["id"=>6, "nama" => "Permana"],
            ["id"=>7, "nama" => "Tony"],
            ["id"=>8, "nama" => "Siska"],
          ];

        return view('siswa.form', compact('data'));
    }
}