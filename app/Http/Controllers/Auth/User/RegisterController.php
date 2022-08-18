<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
        // 限流 一个小时内只能提交 10 次请求；
        $this->middleware('throttle:10,60', [
            'only' => ['register']
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',"same:password_confirmation"],
            'password_confirmation' => ["required", "min:8"]
        ]);
    }

    protected function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $this->sendEmailConfirmationTo($user);
        return redirect()->route('user.login')
            ->with('notification', ["type" => "success", "layout"=>"topCenter","text"=>' 您的帳號尚未激活，請檢查郵箱中的註冊郵件，並激活郵箱 !!']);;
    }

    protected function showRegistrationForm(){
        return view('user.share_components.show_register_form');
    }

    protected function sendEmailConfirmationTo($user)
    {
        $view = 'layouts.limitless.user.share_components.confirmed_email';
        $data = compact('user');
        $from = 'summer@example.com';
        $name = 'Summer';
        $to = $user->email;
        $subject = "感謝您在".config("setting_anma.global.website_title")."網站進行註冊，請卻任您的郵箱 !";

        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        $user->activated = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        return redirect()->route('user.dashboard.index', [$user])
            ->with('notification', ["type" => "success", "layout"=>"topCenter", "timeout"=>false, "text"=>' 恭喜你，激活成功！']);;;
    }
}
