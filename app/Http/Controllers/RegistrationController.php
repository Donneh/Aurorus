<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store(RegistrationRequest $request)
    {
        $request->persist();

        session()->flash('message', 'Thanks for signing up!');

        return redirect()->home();
    }
}
