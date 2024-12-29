<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeminjamSessionController extends Controller
{
    public function showForgotForm(){
        return view('pages.pinjam-bem.forgot');
    }

    public function sendResetLink(Request $request){
           $request->validate([
               'email'=>'required|email|exists:peminjam,email'
           ]);

           $token = \Str::random(64);
           \DB::table('password_resets')->insert([
                 'email'=>$request->email,
                 'token'=>$token,
                 'created_at'=>Carbon::now(),
           ]);
           $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
           $body = "We have received a request to reset the password for <b>Your App Name</b> account associated with ".$request->email.". You can reset your password by clicking the link below.";

           \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
                $message->from('rafianandito22@gmail.com');
                $message->to($request->email)
                        ->subject('Reset Password');
           });

           return back()->with('success', 'We have e-mailed your password reset link');
    }

    public function showResetForm(Request $request, $token = null){
        return view('pages.pinjam-bem.reset')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
             'email'=>'required|email|exists:peminjam,email',
             'password'=>'required|min:5|confirmed',
             'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
             'email'=>$request->email,
             'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{
            Peminjam::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return back()->with('success', 'Your password has been changed! You can login with new password');
        }
    }
}
