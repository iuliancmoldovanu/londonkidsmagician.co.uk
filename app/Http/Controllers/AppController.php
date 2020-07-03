<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{

    protected function contact()
    {
        return view('vendor.contact');
    }

    protected function contactPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number'=>'required|digits_between:10,20',
            'postcodeEvent'=>'required|postcode',
            'dateTimeEvent'=>'required'
        ]);

        $data = \Input::all();

        Mail::send('mail', $data, function( $response) use ($data) {
            $response->to([$data['email'], 'ciupicu77@gmail.com', 'russellsmagic@gmail.com'])
                ->subject('Contact enquiries londonkidsmagician');
            $response->from('russellsmagic@gmail.com','Russell Magic Website');
        });

        return back()->with('success', 'Thanks for contacting us!');
    }
}
