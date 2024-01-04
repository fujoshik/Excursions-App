<?php

namespace App\Http\Controllers;

use App\Models\Excursion;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request as Input;

class ExcursionController extends BaseController
{
    public function getAll()
    {
        $searchString = Input::get('searchString');

        if ($searchString != null)
        {
            $excursions = Excursion::where('start', 'LIKE', '%' . $searchString . '%')
            ->orWhere('name', 'LIKE', '%' . $searchString . '%')
            ->orWhereHas('organizers', function ($query) use ($searchString) {
                $query->where('organizers.name', $searchString);
            })->orWhereHas('transports', function ($query) use ($searchString) { 
                $query->where('transports.vehicle', $searchString);
            })->get();
        }
        else 
        {
            $excursions = Excursion::all();
        }        

        return view('layouts/excursion', compact('excursions'));
    }
}