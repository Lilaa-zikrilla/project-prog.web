<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function item_view() {
        //dd('berhasil masuk');
        $data['allDataItem']=Item::all();
        return view('backend.item.view_item', $data);
    }

    public function item_add() {
        return view('backend.item.add_item');
    }

    public function item_query(Request $request) {
        // untuk halaman tambah barang query (proses)
        $validateData = $request->validate([
            'item' => 'required|unique:items',
        ]);

        $data = new Item();
        $data->item = $request->item;
        $data->price = $request->price;
        $data->save();

        return redirect()->route('item.view')->with('info', 'Item added successfully');
    }

    public function item_update($id) {
        // untuk halaman update barang
        $updateData = Item::find($id);
        return view('backend.item.update_item', compact('updateData'));
    }

    public function item_updating(Request $request, $id) {
        // untuk halaman tambah barang query (proses)
        $validateData = $request->validate([
            'item' => 'required|unique:items',
        ]);

        $data = Item::find($id);
        $data->item = $request->item;
        $data->price = $request->price;
        $data->save();

        return redirect()->route('item.view')->with('info', 'Item update successfully');
    }

    public function item_delete($id) {
        // untuk halaman delete user
        $deleteData = Item::find($id);
        $deleteData->delete();

        return redirect()->route('item.view')->with('info', 'Item delete successfully');
    }
}
