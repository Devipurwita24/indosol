<?php

namespace App\Http\Controllers;

use App\Models\talk_to_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class talkController extends Controller
{
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
}
