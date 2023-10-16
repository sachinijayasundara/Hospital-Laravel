<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {

                $doctor = doctor::all();

                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id('home')) {
            return redirect('home');
        } else {

            $doctor = doctor::all();


            return view('user.home', compact('doctor'));
        }
    }
    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->date = $request->date;

        $data->phone = $request->number;

        $data->message = $request->message;

        $data->doctor = $request->doctor;
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->user_id = Auth::user()->id;
    }
}
