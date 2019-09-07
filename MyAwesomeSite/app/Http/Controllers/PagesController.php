<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'tasks' => ['Lof of stuff'],
            'foo' => request('title')
        ]);
    
        /*OTHER OPTIONS:
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work'
        ];
        
        OPTION 1:   
        $foo = request('title');
        
        return view('welcome')->withTasks($tasks)->withFoo($foo);
        
        OPTION 2:
        return view('welcome')->with([
            'foo' => 'Miguel',
            'tasks' => $tasks
        ]);
    */
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
