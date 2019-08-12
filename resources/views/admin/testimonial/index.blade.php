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

            @foreach($testimonials as $testimonial)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$testimonial->author_name}}</td>
                    <td>{{$testimonial->speech}}</td>
                    <td>{{$testimonial->designation}}</td>
                    <td>
                        <img src="{{asset($testimonial->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

@endsection