<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquadController extends Controller
{
    public function index(){
        return view('pages.admin.squad');
    
        }
    }

