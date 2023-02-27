<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function daftarUser()
    {

        $data = UserModel::get();
        return response()->json($data);
    }


    public function showUser($id){
        $data = UserModel::findOrFail($id);
        return response()->json($data);
    }
    

    public function createUser(Request $request)
    {

      

        $data = UserModel::create($request->all());
        return response()->json($data);
    }

    public function updateUser($id, Request $request)
    {

        UserModel::where('id', $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);

      

    $data = UserModel::find($id);
    return response()->json([
        'status'=>200,
        'data'=>$data,
    ]);


    }

    public function detailUser($id){
        $data = UserModel::find($id);
        return response()->json([
        'status'=>200,
        'data'=>$data,
    ]);
    }

    public function deleteUser($id)
    {

        // UserModel::where($id)->delete();
        // return response()->json("Data berhasil di delete");

        $data = UserModel::findOrFail($id);
        $data->delete();
        return response()->json($data);
    }
}
