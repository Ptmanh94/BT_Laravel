<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	/*Tao 1 ham trong controller*/
    public function Hello()
    {
    	return('Hello World!');
    }
    /*---------------------------------------------------------------------------------------------------*/
    /*truyen tham so Action Controller*/
    public function indexfunction($category, $post_id)
    {
    	return ("Category is ".$category.". Post ID is ".$post_id);
    }
    /*---------------------------------------------------------------------------------------------------*/
   
}
