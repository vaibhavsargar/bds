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
        {{-- <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Today's Date</b></div>

                <div class="card-body">
                    Today's date is <b> {{$date->format('d-M-Y')}}</b>
                </div>
            </div>
        </div> --}}
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Birthday</b></div>

                <div class="card-body">
                    @forelse ($users as $user)
                        <li>{{ $user->name }} with birthdate {{ $user->dob }}</li>
                    @empty
                        <div>No birthday today</div>
                    @endforelse
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
                            @foreach ($allUsers as $key => $user1)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user1->name }}</td>
                                    <td>{{ $user1->dob }}</td>
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
