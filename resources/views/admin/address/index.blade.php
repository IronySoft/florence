@extends('admin.master')
@section('body')

    <h1 class="text text-primary"> {{Session::get('message')}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL</th>
            <th scope="col">Title</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone1</th>
            <th scope="col">Phone2</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>


        <tbody>

        @php($i=1)

        @foreach($addresses as $row)
            <tr>
                <th scope="row">{{$i++}}</th>

                <td>{{$row->title}}</td>
                <td>{{$row->name}}</td>
                <td>{!! $row->address !!}</td>
                <td>{{$row->phone1}}</td>
                <td>{{$row->phone2}}</td>
                <td>{{$row->email}}</td>

                <td>
                    <a class="btn btn-secondary" href="{{route('address.show',['address'=>$row->id])}}">Edit</a>
                    <form method="post" action="{{route('address.destroy',['address'=>$row->id])}}">

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