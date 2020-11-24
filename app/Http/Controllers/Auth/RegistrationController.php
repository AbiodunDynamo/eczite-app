<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Fortify\Rules\Password;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $ref = $request->ref ?? null;
        $title =  'register';
        return view('eczite.register' ,compact( 'ref','title'));
    }
    public function registerDriver(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_no' => 'required|string|unique:users|phone',
            'location' => 'required|string',
            'vehicle' => 'required|string|in:bike,car,bus',
            'password' => ['required','string','confirmed' , new Password()]
        ]);
        if($this->createUser($request, true))
        {
            alert()->success('Registered', 'your account has been registered');
            return redirect('login');
        }
        alert()->success('Error', 'Account not registered');
        return redirect()->back();
    }
    public function registerUsers(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_no' => 'required|string|unique:users|phone',
            'password' => ['required','string','confirmed' , new Password()]
        ]);
        if($this->createUser($request))
        {
            alert()->success('Registered', 'your account has been registered');
            return redirect('login');
        }
        return redirect()->back()->withErrors(['message' => 'user not register']);
    }
    private function createUser( Request $request , $driver = false)
    {
        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'slug' => str_slug($request->name, '-') ."-". str_random(20),
                'phone_no' => $request->phone_no,
                'driver' => $driver,
                'password' => Hash::make($request->password),
                'remember_token' => Str::random(20),
            ]
        );
        if($driver)
        {
            $user->driver()->create(
                [
                    'location' => $request->location,
                    'vehicle' => $request->vehicle,
                ]
            );
        }
        if($request->ref)
        {
            $check = User::whereSlug($request->ref)->first();
            if($check) {
                $check->update(
                  [
                      'referral_count' => $check->referral_count += 1
                  ]
                );
            }
        }
        if($user)
        {
            return $user;
        }
        return false;

    }
}
