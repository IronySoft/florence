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
        @php($i=1)
        @foreach($blogs as $blog)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{!! $blog->description !!}</td>
                <td>
                    <img src="{{asset($blog->image)}}" height="100" width="100">
                </td>
                <td>
                    <a class="btn btn-secondary" href="{{route('blog.show',['blog'=>$blog->id])}}">Edit</a>
                    <form method="post" action="{{route('blog.destroy',['blog'=>$blog->id])}}">

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