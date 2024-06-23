<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'deteil']);
        Contact::create($contact);
        /*追加後のリダイレクト先は、調べる必要あり*/
        return view('thanks');
    }

    public function confirm($request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'content', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function destroy($request)
    {

    }
}
