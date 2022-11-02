<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function show()
    {
        $data = client::all();
        return view('crud.client', compact('data'));
    }
    public function index()
    {
        $data = client::all();
        return view('index', compact('data'));
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
        if ($request->file('logo_client')) {
            $gambar = $request->file('logo_client');
            $name = $gambar->getClientOriginalName();
            $gambar->move('uploads/logo_client/', $name);
            $data->logo_client = $name;
        }
        $data->save();
        // $data = client::all();
        return Redirect('/adminDashboard')->with('success', 'Client berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $post = client::where('id', $id)->first();

        if ($post != null) {
            $post->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        }
        return redirect()->back()->with(['message'=> 'Wrong ID!!']);

    }
}
