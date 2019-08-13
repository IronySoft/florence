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
            @foreach($abouts as $about)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$about->description}}</td>
                    <td>
                        <img src="{{asset($about->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a href="{{route('about.show',['about'=>$about->id])}}">Edit</a>

                        <form method="post" action="{{route('about.destroy',['about'=>$about->id])}}">

                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>

@endsection