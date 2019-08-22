@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Example</h3>
            </div>

            <form action="{{route('course.update',['course'=> $course->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">


                    <div class="form-group">
                        <label for="exampleInputEmail1">Course First Name</label>
                        <div class="form-group">
                            <textarea id="editor1" class="form-control" name="first_name"> {{$course->first_name}}</textarea>
                            <span class="text-danger">{{$errors->has('first_name')? $errors->First('first_name'): ''}}</span>

                        </div>
                        <span class="text-danger">{{$errors->has('first_name')? $errors->First('first_name'): ''}}</span>

                    </div><div class="form-group">
                        <label for="exampleInputEmail1">Course Last Name</label>
                        <textarea id="editor2" class="form-control" name="last_name">{{$course->last_name}} </textarea>
                        <span class="text-danger">{{$errors->has('last_name')? $errors->First('last_name'): ''}}</span>

                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea id="editor4" class="form-control" name="description">{{$course->description}}</textarea>
                        <span class="text-danger">{{$errors->has('description')? $errors->First('description'): ''}}</span>

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