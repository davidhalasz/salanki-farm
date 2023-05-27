<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Opening;
use App\Models\Information;
use App\Models\Price;
use App\Models\Service;

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
}
