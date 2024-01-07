<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Support\Facades\Request as Input;

class OrganizerController extends Controller
{
    public function getAll()
    {
        $searchString = htmlspecialchars(strip_tags(Input::get('searchString')));

        if ($searchString != null)
        {
            $organizers = Organizer::where('name', 'LIKE', '%' . $searchString . '%')->get();
        }
        else 
        {
            $organizers = Organizer::all();
        }        

        return view('layouts/organizer', compact('organizers'));
    }
}
