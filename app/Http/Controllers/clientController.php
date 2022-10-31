<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        $data = client::all();
        // return $data;
        return view('index', compact(
            'data'
        ));
    }
    public function create()
    {
        $client = new client;
        return view('crud.create_client', compact(
            'client',
            'client'
        ));
    }
    public function store(Request $request)
    {
        $data = new client;
        $data->nama_client = $request->nama_client;
        if ($request->file('logo_client')) {
            $gambar = $request->file('logo_client');
            $name = $gambar->getClientOriginalName();
            $gambar->move('uploads/logo_client/', $name);
            $data->logo_client = $name;
        }
        $data->save();
        $data = client::all();
        // return Redirect('/')->with([
        //     'message' => 'Event Berhasil Ditambahkan! ',
        //     'message_type' => 'success',
        // ])->withInput();
        return Redirect('/')->with('success', 'Client berhasil ditambahkan!');
    }
}
