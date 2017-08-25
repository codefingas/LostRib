<?php

namespace App\Http\Controllers;

use App\Interest;
use Illuminate\Http\Request;

class InterestsController extends Controller
{
    public function index()
    {
        return 'interests.index';
    }

    public function view(Interest $interest)
    {
        return $interest;
    }
    
    public function saveInterest(){
        $interest = new Interest();
        $interest->addInterest(request()->target_id);
    }
    
    public function deleteInterest(Interest $interest)
    {
        Interest::destroy($interest->id);
    }
}
