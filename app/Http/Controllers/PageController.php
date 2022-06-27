<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participations;

class PageController extends Controller
{

    public function index(){
        return view('index');
    }


    public function legals(){
        return view('legals');
    }

    public function participate(){
        $participation = Participations::create($this->data());
        return back()->with('status', 'OK');
    }

    
    private function data() {
        return request()->validate([
            'name' => 'filled|string|max:255',
            'firstname' => 'filled|string|max:255',
            'gift' => 'filled',
            'city' => 'filled',
            'email' => 'filled|email|unique:participations',
            'question1' => 'filled',
            'question2' => 'filled',  
        ]);
    }

  

}
