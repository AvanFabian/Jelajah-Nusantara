<?php

namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function prosesUserValidator(Request $request){
        $validator = validator::make($request->all(),[
            'username' => 'required|min:6|max:9',
            'password' => [
                'required',
                'regex:/^[a-zA-Z0-9]*$/',
                'min:6',
                'max:10'
            ],
            'email' => 'required|email'
        ],
        [
            'required' => 'Required fields must be filled in.',
            'size' => ':atribute harus berukuran :size karakter.',
            'max' => ':atribute maximal berisi :max karakter',
            'min' => ':atribute minimal berisi :min karakter',
            'email' => ':harus diisi dengaan alamat email yang valid'
        ]);

        if($validator->fails()){
            return redirect('/login')->withErrors($validator)->withInput();
        }else{
            echo $request->username; echo "<br>";
            echo $request->password; echo "<br>";
            echo $request->email; echo "br";
        }
    }
}
