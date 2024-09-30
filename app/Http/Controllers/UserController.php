<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->uname;
        $group_name = $request->group_name;

        $user = new User();
        $user->fill([
            'id' => $user->id,
            'name' => $name,
            'group_name' => $group_name
        ]);
        $user->save();
        if (!$user) 
            return redirect()->route('store');
        else {
            $questions = Question::all();
            return view('test', ['user' => $user, 'questions' => $questions]);
        }       

    }
}
