@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Title Name of Goal</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
        @foreach($goals as $project)
            <tr>
                <th scope="row">1</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>

                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>

@endsection