<?php

namespace App\Http\Controllers;

use App\Models\Apartement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'NIRAGE',
            'apartments' => Apartement::all()->sortByDesc('created_at')->forPage(1,4)
        ];
        return view('nirage.index', $data);
    }

    public function show()
    {
        $data = [
            'title' => 'Apartment | Nirage',
            'apartments' => Apartement::all()->sortByDesc('created_at')
        ];
        return view('nirage.appartements', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Details Apartment ',
            'apartment' => Apartement::where('slug', $slug)->firstOrfail()
        ];
        return view('nirage.details', $data);
    }

}
