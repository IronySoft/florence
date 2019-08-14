@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>

            <th scope="col">Walking Notice</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>
        @php($i=1)
        @foreach($texts as $text)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$text->text}}</td>

                <td>
                    <a class="btn btn-secondary" href="{{route('text.show',['text'=>$text->id])}}">Edit</a>
                    <form method="post" action="{{route('text.destroy',['text'=>$text->id])}}">

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