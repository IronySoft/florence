@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
        @if($projects)
            @foreach($projects as $project)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>
                        <img src="{{asset($project->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('project.show',['project'=>$project->id])}}">Edit</a>

                        <form method="post" action="{{route('project.destroy',['project'=>$project->id])}}">

                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection