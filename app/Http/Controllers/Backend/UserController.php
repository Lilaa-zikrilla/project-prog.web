<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // //dd('berhasil masuk');
    public function user_view() {
        // untuk halaman menampilkan user
        $data['allDataUser']=User::all();
        return view('backend.user.view_user', $data);
    }

    public function user_add() {
        // untuk halaman tambah user
        return view('backend.user.add_user');
    }

    public function user_query(Request $request) {
        // untuk halaman tambah user query (proses)
        $validateData = $request->validate([
            'email' => 'required|unique:users',
        ]);

        $data = new User();
        $data->usertype = $request->selectGroup;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect()->route('user.view')->with('info', 'User added successfully');
    }

    public function user_update($id) {
        // untuk halaman update user
        $updateData = User::find($id);
        return view('backend.user.update_user', compact('updateData'));
    }

    public function user_updating(Request $request, $id) {
        // untuk halaman tambah user query (proses)
        $validateData = $request->validate([
            'email' => 'required|unique:users',
        ]);

        $data = User::find($id);
        $data->usertype = $request->selectGroup;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect()->route('user.view')->with('info', 'User update successfully');
    }

    public function user_delete($id) {
        // untuk halaman delete user
        $deleteData = User::find($id);
        $deleteData->delete();

        return redirect()->route('user.view')->with('info', 'User delete successfully');
    }
}
