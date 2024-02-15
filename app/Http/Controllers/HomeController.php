<?php

namespace App\Http\Controllers;
use App\Models\Fatwa;
use App\Models\Question;
use App\Models\user;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function count()
    {
        // Fetch the required data
        $totalFatwas = Fatwa::count();
        $totalFAQ = Question::count();
        $totalUsers = user::count(); // Assuming you want the total count of users

        // Pass the data to the view
        return view('home', compact('totalFatwas', 'totalFAQ', 'totalUsers'));
    }
}
