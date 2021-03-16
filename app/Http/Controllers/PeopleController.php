<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    public function index() {
        $peoples = json_decode(Http::asForm()->get('https://swapi.dev/api/people/'))->results;
        return view('index', compact('peoples'));
    }
    public function show($id) {
        $people = json_decode(Http::asForm()->get('https://swapi.dev/api/people/'.$id));
        return view('show', compact('people'));
    }
}
