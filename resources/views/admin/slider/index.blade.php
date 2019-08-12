@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">First Title</th>
            <th scope="col">Last Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @if($sliders)
            @foreach($sliders as $slider)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$slider->first_title}}</td>
                    <td>{{$slider->last_title}}</td>
                    <td>{{$slider->description}}</td>
                    <td>
                        <img src="{{asset($slider->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection