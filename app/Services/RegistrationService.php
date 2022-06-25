<?php

namespace App\Services;

use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;

class RegistrationService
{
    public function registration(RegistrationRequest $req,)
    {

        $registration = new Registration();
        $registration->login = $req->input('login');
        $registration->email = $req->input('email');
        $registration->psw = $req->input('psw');

        $result = $registration->save();
        return $result;
    }
}

