<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class LunchController extends Controller
{
   
	public function index(){
   		return response()->json(Recipe::available()->get(), 200);
   	}
}
