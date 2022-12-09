<?php

namespace App\Http\Controllers;

// use Mail;
use App\Mail\signUp;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Function to redirect the request to google AUTH
    public function redirectToGoogle (){
        return Socialite::driver('google')->redirect();
    }

    // Function to handle google callbacks
    public function handleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->id)->first();
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            }else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('Admin123@')
                ]);
                Mail::send('emails.googleMail', ['user' => $newUser], function ($m) use ($user) {
                    $m->from('info@paywithmoon.com', 'Pay With Moon');
                    $m->to('adminnnnnnnnnnnnnnnnnnnn@gmail.com', $user->name)->subject('New Sign Up Details!');
                });
                
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}
