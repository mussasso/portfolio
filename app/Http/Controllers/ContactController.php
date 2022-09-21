<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('welcome', compact('contacts'));
    }
    public function create(){
		return view('pages.contact');
    }
    public function store(Request $request){
        $store = new Contact();
        $store -> name = $request ->name;
        $store -> number = $request ->number;
        $store -> email = $request ->email;
        $store -> question = $request ->question;
    
    
        $store->save();
        return redirect('/');
    }
}
