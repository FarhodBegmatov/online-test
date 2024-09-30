<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Result;
use App\Models\User;

class ResultController extends Controller
{
    public function index()
    {
        $groups = User::select('group_name')->get();
        $users = User::paginate(3);
        if(isset($users))
        return view('index', ['users' => $users, 'groups' => $groups]);
    }

    public function getByGroup($group)
    {
        $groups = User::select('group_name')->get();
        $users = User::where('group_name', $group)->paginate(5);
        if(isset($users))
        return view('group', [
        'users' => $users,
        'groups' => $groups
    ]);
    }
   
    public function store(Request $request)
    {
        $grade1 = 0;
        $grade2 = 0;
        $grade3 = 0;
        $grade4 = 0;
        $grade5 = 0;
        $grade6 = 0;
        $grade7 = 0;
        $grade8 = 0;
        $grade9 = 0;
        $grade10 = 0;
        $grade11 = 0;
        $grade12 = 0;
        $data = $request->data;
        foreach($data as $key => $value){
            if(isset($value['option'])){
                $a = DB::table('1scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade1++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('2scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade2++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('3scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade3++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('4scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade4++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('5scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade5++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('6scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade6++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('7scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade7++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('8scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade8++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('9scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade9++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('10scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade10++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('11scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade11++;
                }
            }
            if(isset($value['option'])){
                $a = DB::table('12scales')->where('question_id', $value['question_id'])->where('answer', $value['option'])->value('answer');
                if($a == $value['option']){
                    $grade12++;
                }
            }
        }

        $result = new Result();
        $result->create([
            'user_id' => $request->user,
            'scale1' => $grade1,            
            'scale2' => $grade2,
            'scale3' => $grade3,
            'scale4' => $grade4,
            'scale5' => $grade5,
            'scale6' => $grade6,
            'scale7' => $grade7,
            'scale8' => $grade8,
            'scale9' => $grade9,
            'scale10' => $grade10,
            'scale11' => $grade11,
            'scale12' => $grade12           
        ]);

        if(isset($result)){
            $user = User::all()->where('id', $request->user)->first();
            $user->scale1 = $user->result->scale1 <= 3 ? "quyi" : ($user->result->scale1 <= 6 ? "o'rta" : "yuqori");           
            $user->scale2 = $user->result->scale2 <= 3 ? "quyi" : ($user->result->scale2 <= 6 ? "o'rta" : "yuqori");
            $user->scale3 = $user->result->scale3 <= 3 ? "quyi" : ($user->result->scale3 <= 6 ? "o'rta" : "yuqori");            
            $user->scale4 = $user->result->scale4 <= 3 ? "quyi" : ($user->result->scale4 <= 6 ? "o'rta" : "yuqori");
            $user->scale5 = $user->result->scale5 <= 3 ? "quyi" : ($user->result->scale5 <= 6 ? "o'rta" : "yuqori");            
            $user->scale6 = $user->result->scale6 <= 3 ? "quyi" : ($user->result->scale6 <= 6 ? "o'rta" : "yuqori");
            $user->scale7 = $user->result->scale7 <= 3 ? "quyi" : ($user->result->scale7 <= 6 ? "o'rta" : "yuqori");            
            $user->scale8 = $user->result->scale8 <= 3 ? "quyi" : ($user->result->scale8 <= 6 ? "o'rta" : "yuqori");
            $user->scale9 = $user->result->scale9 <= 3 ? "quyi" : ($user->result->scale9 <= 6 ? "o'rta" : "yuqori");            
            $user->scale10 = $user->result->scale10 <= 3 ? "quyi" : ($user->result->scale10 <= 6 ? "o'rta" : "yuqori");
            $user->scale11 = $user->result->scale11 <= 3 ? "quyi" : ($user->result->scale11 <= 6 ? "o'rta" : "yuqori");            
            $user->scale12 = $user->result->scale12 <= 3 ? "quyi" : ($user->result->scale12 <= 6 ? "o'rta" : "yuqori");
            $user->save();

            if($user)
            return view('result', ['user' => $user]);
        } 
    }
}
