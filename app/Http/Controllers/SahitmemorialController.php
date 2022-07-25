<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SahitmemorialController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
    public function about(){
        return view('Frontend.about');
    }
    public function ourservices(){
        return view('Frontend.ourservices-page');
    }
    public function departmentMain(){
        return view('Frontend.department-main');
    }
    public function department(){
        return view('Frontend.department');
    }
    public function doctors(){
        return view('Frontend.doctors');
    }
    public function newsevent(){
        return view('Frontend.newsevent');
    }
    public function newsdetails(){
        return view('Frontend.newsdetails');
    }
    public function contactus(){
        return view('Frontend.contactus');
    }
}

