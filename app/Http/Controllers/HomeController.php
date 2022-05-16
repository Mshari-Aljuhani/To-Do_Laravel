<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DatePeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function welcome(){
        $tasks = Task::where('user_id', Auth::id())->where('checked', false)->get();
        $checkedTasks = Task::where('user_id', Auth::id())->where('checked', true)->get();

        return view('welcome', compact('tasks','checkedTasks'));
    }
}
