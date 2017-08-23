<?php

namespace App\Http\Controllers;

use App\User;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function viewProfile()
    {
        $user = new User(Auth::id());
        
        $notifications = $user->notifications();
        $interests = [
            'from' => $user->interestShownFrom(),
            'to' => $user->interestShownIn()
        ];
        $transactions = $user->transactions();

        $matches = 'get matches';

        return view(
            'user.profile',

            [
                'user' => $user,
                'notifications' => $notifications,
                'interests' => $interests,
                'transactions' => $transactions,
                'matches' => $matches
            ]);
    }
}
