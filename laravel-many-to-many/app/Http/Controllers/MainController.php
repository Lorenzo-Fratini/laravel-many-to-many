<?php

namespace App\Http\Controllers;

use App\Location;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        $locations = Location::all();

        return view('pages.index', compact('locations'));
    }
}
