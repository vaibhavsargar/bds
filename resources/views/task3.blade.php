@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Task Details</b></div>

                <div class="card-body">
                    <p><b>Task 2:</b> Seperate out given array into even and odd array</p>
                    <p><b>API URL:</b> https://jsonplaceholder.typicode.com/posts/1</p>
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Response from API</b></div>

                <div class="card-body">
                    <p><b>userid:</b> {{$response_json->userId}}</p>
                    <p><b>id:</b> {{$response_json->id}}</p>
                    <p><b>title:</b> {{$response_json->title}}</p>
                    <p><b>body:</b> {{$response_json->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
