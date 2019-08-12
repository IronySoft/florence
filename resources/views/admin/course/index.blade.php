@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Name</th>
            <th scope="col">Duration</th>
            <th scope="col">Total Fees</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>

        @foreach($courses as $project)
            <tr>
                <th scope="row">1</th>
                <td>{{$project->first_name}} {{$project->last_name}}</td>
                <td>{{$project->month_number}} months </td>
                <td>{{$project->month_number * $project->fee}} tk. </td>

                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>

@endsection