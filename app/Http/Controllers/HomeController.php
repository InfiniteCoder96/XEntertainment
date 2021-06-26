<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        switch ($role) {
            case 'admin':
                return view('admin.dashboard');
                break;
            case 'manager':
                return $this->show_home();
                break;
            default:
                return $this->show_home();
                break;
        }
        
    }

    public function show_dashboard() {
        
    }

    public function show_home() {
        $eventJsonArr = app('App\Http\Controllers\EventController')->getAllEvents();
                
                //dd($events);
        return view('welcome',compact('eventJsonArr'));
    }
}
