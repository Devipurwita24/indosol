<?php

namespace App\Http\Controllers;

use App\Models\talk_to_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class talkController extends Controller
{
    public function show()
    {
        $data = talk_to_us::all();
        $data = talk_to_us::orderBy('created_at', 'desc')->get();
        return view('crud.CMS_talk_to_us', compact('data'));
    }
    public function store(Request $request)
    {
        $validator = validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
            ],
            [
                'nama_lengkap.required' => 'nama tidak boleh kosong!'

            ]
        );

        $data = talk_to_us::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'messege' => $request->messege,
        ]);
        if ($data) {
            return Redirect('/')->with('success', 'Messege berhasil dikirim!');

        } else {
            return ApiFormatter::createApi(400, 'failed');
        }
    }
    public function delete($id)
    {
        $post = talk::where('id', $id)->first();

        if ($post != null) {
            $post->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        }
        return redirect()->back()->with(['message'=> 'Wrong ID!!']);

    }
}
