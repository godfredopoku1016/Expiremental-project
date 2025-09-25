<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expirement;

class ExpirementController extends Controller
{

    public function addExpirement(Request $request){
        $validatedCredentials = $request->validate([
            "title" => "required",
            "description" => "required",
        ]);

        // Only create if user is authenticated
        if (auth()->check()) {
            Expirement::create([
                'title' => strip_tags($validatedCredentials['title']),
                'description' => strip_tags($validatedCredentials['description']),
                'user_id' => auth()->id()
            ]);
        }

        return redirect('/');
    }


    public function editExpirement(Expirement $expirement){
      if(auth()->user()->id !==$expirement['user_id']){
        return redirect('/');
      }
      return view('edit-expirement',['expirement'=>$expirement]);
    }

    public function updatedExpirement(Request $request,Expirement $expirement){
      if(auth()->user()->id ===$expirement['user_id']){
        $validatedCredentials = $request->validate([
          "title" => "required",
          "description" => "required",
        ]);
        $validatedCredentials['title'] = strip_tags($validatedCredentials['title']);
        $validatedCredentials['description'] = strip_tags($validatedCredentials['description']);
        $expirement -> update($validatedCredentials);
      }
      return redirect('/');
    }


    public function deleteExpirement(Expirement $expirement){
      if(auth()->user()->id ===$expirement['user_id']){
        $expirement->delete();
      }
      return redirect('/');
    }

}
