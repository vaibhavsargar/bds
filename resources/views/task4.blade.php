@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-6 my-3">
            <div class="card">
                <div class="card-header"><b>Response from API with Post method</b></div>

                <div class="card-body">
                    
                    @if ($response_json2)
                        <p><b>Status:</b> {{$response_json2->status}}</p>
                    <p><b>Message:</b> {{$response_json2->message}}</p>
                    <p><b>Method:</b> {{$response_json2->method}}</p>
                    <h5><b>Data</b> </h5>
                    <p><b>Name:</b> {{$response_json2->data->name}}</p>
                    <p><b>Email:</b> {{$response_json2->data->email}}</p>
                    @else
                    <p>No API response found</p>
                    @endif 
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card">
                <div class="card-header"><b>Response from API with Token</b></div>

                <div class="card-body">
                    @if ($response_json1)
                        <p><b>Status:</b> {{$response_json1->status}}</p>
                    <p><b>Message:</b> {{$response_json1->message}}</p>
                    <p><b>Method:</b> {{$response_json1->method}}</p>
                    <h5><b>Data</b> </h5>
                    <p><b>Name:</b> {{$response_json1->data->name}}</p>
                    <p><b>Email:</b> {{$response_json1->data->email}}</p>
                    @else
                    <p>No API response found</p>
                    @endif 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
