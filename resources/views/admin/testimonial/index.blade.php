@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">author_name</th>
            <th scope="col">speech</th>
            <th scope="col">designation</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
            @foreach($testimonials as $testimonial)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$testimonial->author_name}}</td>
                    <td>{{$testimonial->speech}}</td>
                    <td>{{$testimonial->designation}}</td>
                    <td>
                        <img src="{{asset($testimonial->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('testimonial.show',['testimonial'=>$testimonial->id])}}">Edit</a>
                        <form method="post" action="{{route('testimonial.destroy',['testimonial'=>$testimonial->id])}}">

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