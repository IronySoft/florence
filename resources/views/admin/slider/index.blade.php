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
        @php($i=1)
        @if($sliders)
            @foreach($sliders as $slider)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$slider->first_title}}</td>
                    <td>{{$slider->last_title}}</td>
                    <td>{{$slider->description}}</td>
                    <td>
                        <img src="{{asset($slider->image)}}" height="50" width="50">
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('slider.show',['slider'=>$slider->id])}}">Edit</a>
                        <form method="post" action="{{route('slider.destroy',['slider'=>$slider->id])}}">

                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>


                    </td>

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection