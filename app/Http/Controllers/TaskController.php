<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class TaskController extends Controller
{
    public function task1()
    {
        $allusers = User::all();
        $date = Carbon::now();
        $todayDate = $date->format('m');
        $user = User::whereMonth('dob', $date->format('m'))->whereDay('dob',$date->format('d'))->get();
        return view('task1', compact('allusers','user','date'));
    }
    public function task2()
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
        $oddArray = [];
        $evenArray = [];
        foreach($array as $item)
            if($item % 2 == 0){
                $evenArray[] = $item;
            }else{
                $oddArray[] = $item;
            }
        return view('task2', compact('oddArray','evenArray'));
    }
    public function task3()
    {
        $response = Http::get(env('API_URL'));
        $response_json = $response->object();
        return view('task3', compact('response_json'));
    }
}
