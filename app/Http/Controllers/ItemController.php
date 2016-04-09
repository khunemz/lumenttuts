<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class ItemController extends Controller
{
    public function index()
    {

        return view('items.index');
    }
}
