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
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection