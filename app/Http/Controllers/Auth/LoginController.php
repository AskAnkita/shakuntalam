<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function sendOTP(Request $request)
    {
        $request->validate([
            'mobileNo' => 'required|numeric|digits:10'
        ]);

        $user = User::where('mobile_no',$request->mobileNo)->first();

        if (!$user) {
            return response([ 'error' => 'Given mobile number is invalid!'], 422);
        }

        $digits = 6;
        $generateOTP = rand(pow(10,$digits-1), pow(10, $digits)-1);
        return response([ 'message' => 'OTP Generated Successfully', 'generatedOTP' => $generateOTP], 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'OTP' => 'required|numeric|digits:6'
        ]);

        $valid = $request['OTP'] === $request['generatedOTP'];

        if ($valid) {
            $user = tap(User::where('mobile_no',$request['mobileNo']))->update(['is_verified' => true]);
            Auth::login($user->first());
            return response(['message' => 'Login Successfully'], 200);
        }
        return response(['error' => 'Invalid verification code!'], 422);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response(['message' => 'Logged out successfully'], 200);
    }
}
