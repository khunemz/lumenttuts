<?php namespace App\Http\Controllers;

use App\Item;
use Laravel\Lumen\Routing\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(21);
        return view('items.index', compact('items', $items));
    }

    public function show($id){
        $item = Item::findOrFail($id);
        return view('items.show', compact('item', $item));
    }
}
