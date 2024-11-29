<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
   public function index() {
      return Inertia::render('Master');;
   }
  
   public function contact() {
    return view('layouts.contact');
   }
  
}
