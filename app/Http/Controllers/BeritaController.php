<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function showBeritaForm()
    {
        return view('berita.form');
    }       
}