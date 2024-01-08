<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showForm(Request $request)
    {

        $data = [
            ["jenis" => "flora", "nama" => "Bunga Mawar"],
            ["jenis" => "fauna", "nama" => "Kelinci"],
            ["jenis" => "fauna", "nama" => "Kucing"],
            ["jenis" => "flora", "nama" => "Enceng Gondok"],
            ["jenis" => "flora", "nama" => "Bunga Melati"],
          ];

          $groupData = collect($data)->groupBy('jenis');

          $hasil = $groupData->map(function ($items, $jenis) {
              return [
                  'jenis' => $jenis,
                  'nama' => $items->pluck('nama')->toArray(),
              ];
          })->values()->toArray();

          dd($hasil);

        return view('data.form');
    }
}