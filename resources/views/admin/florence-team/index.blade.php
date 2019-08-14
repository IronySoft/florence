@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
        @foreach($florenceTeams as $florence)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$florence->name}}</td>
                <td>{{$florence->designation}}</td>
                <td>
                    <img src="{{asset($florence->image)}}" height="100" width="100">
                </td>
                <td>
                    <a class="btn btn-secondary" href="{{route('florence.show',['florence'=>$florence->id])}}">Edit</a>
                    <form method="post" action="{{route('florence.destroy',['florence'=>$florence->id])}}">

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