<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Redirect;
use Carbon\Carbon;

class UsersControlller extends Controller
{
    //
    public function submitData(Request $request) {
    	
    	$person = new People();

    	$person->name = $request->input("name");
    	$person->lastname = $request->input("lastname");
    	$person->address = $request->input("address");
    	$person->bio = $request->input("bio");
    	$person->birth_date = date('Y-m-d H:i:s', strtotime($request->input("birth_date")));
    	$person->save();

    	return Redirect()->back();
    }

    public function getAll() {
        $persons = People::all();
        return view("list", compact("persons"));
    }

}
