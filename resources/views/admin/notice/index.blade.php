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
        @foreach($goals as $goal)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$goal->title}}</td>
                <td>{{$goal->description}}</td>

                <td>
                    <a class="btn btn-secondary" href="{{route('goal.show',['goal'=>$goal->id])}}">Edit</a>

                    <form method="post" action="{{route('goal.destroy',['goal'=>$goal->id])}}">

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