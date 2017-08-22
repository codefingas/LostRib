<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\HTTP\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        if(Auth::check()){
            return redirect(route('view_dashboard'));
        }else{
            $this->validate($request, [
                'email' => 'bail|required|email',
                'password' => 'bail|required'
            ]);

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
               return redirect('view_dashboard');
            }
        }

        return ['code' => 403, 'message' => 'Invalid email and password combination'];
    }

    public function logout()
    {
        Auth::logout();
        return ['code' => 200, 'message' => 'Logout was successful'];
    }
}
