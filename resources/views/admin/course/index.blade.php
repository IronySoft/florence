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
        @php($i=1)
        @foreach($courses as $course)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$course->first_name}} {{$course->last_name}}</td>
                <td>{{$course->month_number}} months </td>
                <td>{{$course->month_number * $course->fee}} tk. </td>

                <td>
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