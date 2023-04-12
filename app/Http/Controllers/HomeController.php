<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $allUsers = User::all();

        return Inertia::render('Home', compact(['currentUser', 'allUsers']));
    }
}
