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
        @foreach($contents as $content)
            <tr>
                <th scope="row">{{$i++}}</th>
                @if($content->course)
                    <td>{{$content->course->first_name}} {{$content->course->last_name}}</td>
                @else
                    <td>No Course chosen yet</td>
                @endif
                <td>{{$content->name}}</td>

                <td>
                    <a class="btn btn-secondary" href="{{route('content.show',['content'=>$content->id])}}">Edit</a>
                    <form method="post" action="{{route('content.destroy',['content'=>$content->id])}}">

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