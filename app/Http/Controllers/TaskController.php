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
        $api_url = "https://jsonplaceholder.typicode.com/posts/1";
        $response = Http::get($api_url);
        // $response = Http::get(env('API_URL'));
        // dd($response);
        $response_json = $response->object();
        return view('task3', compact('response_json'));
    }
    
    public function task4()
    {
        $api_url = "http://boru.in/public/api/fetch";
        $response1 = Http::withHeaders([
            'Token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiYXBpdXNlciIsIm5hbWUiOiJsZWFkZm9ybSIsIkFQSV9USU1FIjoxNjQ0MzkzMjQ5fQ.RmJ5ZwcwYn04xdOR0K5LRpY9DqaY4P5d1sU4L2SvfXA',
        ])->get($api_url);
        $response_json1 = $response1->object();

        $response2 = Http::post('http://boru.in/public/api/post_method', [
            'name' => 'Vaibhav',
            'email' => 'sargarvaibhav3@gmail.com',
        ]);
        $response_json2 = $response2->object();

        $response3 = Http::get('http://boru.in/public/api/get_method');
        $response_json3 = $response3->object();
        return view('task4', compact('response_json1','response_json2','response_json3'));
    }


}
