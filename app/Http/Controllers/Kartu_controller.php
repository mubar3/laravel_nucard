<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartu; 
use App\Models\Golongan; 

class Kartu_controller extends Controller
{
    public function add_url()
    {
        Kartu::truncate();
        $golongan=Golongan::all();
        $i=301;
        foreach ($golongan as $key) {
            for ($a=0; $a < $key->jumlah ; $a++) { 
                Kartu::create([
                    'url' =>'http://technucard.my.id/user'.$i,
                    'golongan' =>$key->id
                ]);
                $i++;
            }
        } 
        return 'selesai';
    }

    public function cetak()
    {
        return view('cetak')->with([
            'data' => Kartu::join('golongans','golongans.id','=','kartus.golongan')->get()
        ]);
    }
}
