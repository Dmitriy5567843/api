<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Services\RegistrationService;


class RegistrationController extends Controller
{
    /**
     * @param RegistrationRequest $req
     *
     */
    public function index(RegistrationRequest $req)
    {
        $service = new RegistrationService();
        $serviceResult = $service->registration($req);
        $user = Registration::all();
        return view('checkout',['registationDone'=>$user]);
//       if ($serviceResult===true){
//           return redirect()->route('main', ['registrationDone' => $serviceResult]);
//       }

    }

//    public function welcomUser(){
//        $user = Registration::all();
//        dd($user);
//
//    }
}
