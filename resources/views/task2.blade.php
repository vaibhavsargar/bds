@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Task Details</b></div>

                <div class="card-body">
                    <b>Task 2:</b> Seperate out given array into even and odd array
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header"><b>Given Array</b></div>

                <div class="card-body">
                    <b>Array Given:</b> 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card">
                <div class="card-header"><b>Even Table</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Sr. no.</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($evenArray as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card">
                <div class="card-header"><b>Odd Table</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Sr. no.</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($oddArray as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user }}</td>
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
