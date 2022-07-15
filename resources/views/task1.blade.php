@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Task Details</b></div>

                <div class="card-body">
                    <b>Task 1:</b> Get the users who have birthday today and print their names with date of birth
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Today's Date</b></div>

                <div class="card-body">
                    Today's date is <b> {{$date->format('d-M-Y')}}</b>
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Birthday Today</b></div>

                <div class="card-body">
                    @if (!$user==[])
                        Following users have birthday today <br>
                        @foreach ($user as $key => $item)
                            {{$key+1}}. {{ $item->name }} with birthdate {{ $item->dob }}
                            <br>
                            @endforeach 
                            @else
                            No Users have birthday today
                    @endif
                    
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Users Table</b></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>DOB</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($allusers as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->dob }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
