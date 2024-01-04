<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Support\Facades\Request as Input;

class TransportController extends Controller
{
    public function getAll()
    {
        $searchString = Input::get('searchString');

        if ($searchString != null)
        {
            $transports = Transport::where('vehicle', 'LIKE', '%' . $searchString . '%')->get();
        }
        else 
        {
            $transports = Transport::all();
        }        

        return view('layouts/transport', compact('transports'));
    }
}
