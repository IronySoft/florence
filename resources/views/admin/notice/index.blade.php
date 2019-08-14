@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Location</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
        @foreach($notices as $notice)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$notice->title}}</td>
                <td>{!! $notice->description !!}</td>
                <td>{{$notice->price}}</td>
                <td>{!! $notice->location !!}</td>
                <td>
                    <img src="{{asset($notice->image)}}" width="100" height="100">
                </td>
                <td>{{$notice->type==1?'Book':'Others'}}</td>

                <td>
                    <a class="btn btn-secondary" href="{{route('notice.show',['goal'=>$notice->id])}}">Edit</a>

                    <form method="post" action="{{route('notice.destroy',['notice'=>$notice->id])}}">

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