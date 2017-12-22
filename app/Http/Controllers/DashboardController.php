<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req) {
        $allWorkshops = Workshop::all();
        $localUserId = $req->session()->get('fb_user')->localUserId;
        $registeredWorkshops = Registration::where('user_id', $localUserId)->get();
        return view('dashboard', [
            'allWorkshops' => $allWorkshops,
            'registrationInstances' => $registeredWorkshops
        ]);
    }
}
