<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function daftarUser()
    {

        $data = UserModel::get();

        return response()->json($data);
    }

    public function createUser()
    {

        $data = UserModel::create([
            "id" => 6,
            "name" => "Ana Tilmidun",
            "email" => "emailana@gmail.com",
            "password" => "123456",

        ]);

        return response()->json($data);
    }

    public function updateUser()
    {

        UserModel::where('id', 6)->update([
            "name" => "Stay Halal",
            "email" => "new@gmail.com",
            "password" => "11111",
        ]);

        return response()->json("Data berhasil di Update");
    }

    public function deleteUser()
    {

        UserModel::where('id', 6)->delete();
        return response()->json("Data berhasil di delete");
    }
}
