<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Opening;
use App\Models\Information;
use App\Models\Price;
use App\Models\Service;
use App\Models\Animal;
use App\Models\Gallery;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function kapcsolat() {
        $openings = Opening::all();
        $informations = Information::all();
        return view('kapcsolat', compact(['openings', 'informations']));
    }

    public function arlista() {
        $prices = Price::all();
        return view('araink', compact(['prices']));
    }

    public function szolgaltatasok() {
        $services = Service::all();
        return view('szolgaltatasok', compact(['services']));
    }

    public function fooldal() {
        $animals = Animal::all();
        return view('welcome', compact(['animals']));
    }

    public function galeria() {
        $galleries = Gallery::all();
        return view('galeria', compact(['galleries']));
    }

    public function kepek() {
        $galleries = Gallery::all();
        return view('galeria', compact(['galleries']));
    }
}
