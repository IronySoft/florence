@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">address view</h3>
            </div>

            <form action="{{route('address.update', ['address'=> $our_address->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" required class="form-control" name="title" value="{{$our_address->title}}">
                        <span class="text-danger">{{$errors->has('title')? $errors->First('title'): ''}}</span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" required class="form-control" name="name" value="{{$our_address->name}}">
                        <span class="text-danger">{{$errors->has('name')? $errors->First('name'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea class="form-control" name="address">{{$our_address->address}} </textarea>
                        <span class="text-danger">{{$errors->has('address')? $errors->First('address'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number 1</label>
                        <input type="text" required class="form-control" name="phone1" value="{{$our_address->phone1}}">
                        <span class="text-danger">{{$errors->has('phone1')? $errors->First('phone1'): ''}}</span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number 2</label>
                        <input type="text" required class="form-control" name="phone2" value="{{$our_address->phone2}}">
                        <span class="text-danger">{{$errors->has('phone2')? $errors->First('phone2'): ''}}</span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="text" required class="form-control" name="email" value="{{$our_address->email}}">
                        <span class="text-danger">{{$errors->has('email')? $errors->First('email'): ''}}</span>

                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

        <!-- /.card -->

    </div>
@endsection