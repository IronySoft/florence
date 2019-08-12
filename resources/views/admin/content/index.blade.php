@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Course Name</th>
            <th scope="col">Content Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>

        @php($i=1)
        @foreach($contents as $project)
            <tr>
                <th scope="row">{{$i++}}</th>
                @if($project->course)
                    <td>{{$project->course->first_name}} {{$project->course->last_name}}</td>
                @endif
                <td>{{$project->name}}</td>

                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>

@endsection