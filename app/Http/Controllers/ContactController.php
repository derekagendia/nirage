<?php

namespace App\Http\Controllers;

use App\Events\SimpleVisiteEvent;
use App\Events\VisitRequestEvent;
use App\Http\Requests\ContactRequest;
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

    public function send(ContactRequest $request)
    {
        $request = $request->all();

        if(is_null($request['slug']))
        {
            // Event if is a simple request visite
            event(new SimpleVisiteEvent($request));

            return redirect()->back()->with('message','Your request has been well registered  !   We will get back to you as soon as possible');
        }

        // Event if a visitor select an apartment to visite
        $apartment = Apartement::where('slug', $request['slug'])->firstOrfail();

        event(new VisitRequestEvent($request, $apartment));

        return redirect()->back()->with('message','Your request has been well registered  !   We will get back to you as soon as possible');
    }
}
