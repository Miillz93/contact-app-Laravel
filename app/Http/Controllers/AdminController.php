<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
//        $data =  request()->all();
        $data =  $request->all();
        $userId = Auth::user()->id;
        $user = \App\User::find($userId);

        $contact = new Contact();
        $contact->fullname = $data['fullname'];
        $contact->address = $data['address'];
        $contact->phone = $data['phone'];

        $contact->save();
        # Insert case
        $user->contacts()->attach($contact);
        return redirect('all/contact');
    }

    public function all(){
        $userId = Auth::user()->id;
        $user = \App\User::find($userId);
//        dd($user->contacts);

//        $contact = \App\Contact::all();
//        dd($user->contacts());
        return view('admin.contact', ['user' => $user]);
    }

    public function getContact($id){
//        dd($id);
        $userId = Auth::user()->id;
        $user = \App\User::find($userId);

        $contactId = \App\Contact::find($id);

//        $user->contacts()->associate($contactId);


//        dd($user->contacts()->sync($contactId));

    }
}
