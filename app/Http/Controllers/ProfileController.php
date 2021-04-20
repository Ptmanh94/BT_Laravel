<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function __invoke($id)
    {
    	return("This is my profile!"."<br> My ID: ".$id);
    }
}
