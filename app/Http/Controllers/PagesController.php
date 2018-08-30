<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getTags(){
      return view('tags.tags');

    }

     public function getCmodules() {
   		return view('pages.cmodules');
   	}

   	public function getIndex(){
   		return view('pages.welcome');

   	}

}
