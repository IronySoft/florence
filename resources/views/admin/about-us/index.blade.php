@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>

            @foreach($abouts as $project)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$project->description}}</td>
                    <td>
                        <img src="{{asset($project->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>

@endsection