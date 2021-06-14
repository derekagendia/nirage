<?php

namespace App\Http\Controllers;

use App\Events\VisitRequestEvent;
use App\Models\Apartement;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('nirage.contact', $data);
    }

    public function send(Request $request)
    {
        $request = $request->all();
        $apartment = Apartement::where('slug', $request['slug'])->firstOrfail();
        // Event

        event(new VisitRequestEvent($request, $apartment));
    }
}
