@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>

            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
        @foreach($courses as $course)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$course->first_name}} {{$course->last_name}}</td>
                <td>{{$course->description}} </td>


                <td>
                    @if($course->status==1)
                        <a class="btn btn-secondary" href="{{route('course.edit',['course'=>$course->id])}}">Publish</a>
                    @else
                        <a class="btn btn-secondary" href="{{route('course.edit',['course'=>$course->id])}}">Un-publish</a>
                    @endif
                    <a class="btn btn-secondary" href="{{route('course.show',['course'=>$course->id])}}">Edit</a>
                    <form method="post" action="{{route('course.destroy',['florence'=>$course->id])}}">

                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>

@endsection