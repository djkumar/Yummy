<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Class LoginActivity extends Controller{ 
    
public function index()
{
    $loginActivities = LoginActivity::whereUserId(auth()->user()->id)->latest()->paginate(10);
    return view('login-activity', compact('loginActivities'));
}

}

?>