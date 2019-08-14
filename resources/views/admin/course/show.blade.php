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
                        <input type="text" required class="form-control" name="first_name" value="{{$course->first_name}}">
                        <span class="text-danger">{{$errors->has('first_name')? $errors->First('first_name'): ''}}</span>

                    </div><div class="form-group">
                        <label for="exampleInputEmail1">Course Last Name</label>
                        <input type="text" required class="form-control" name="last_name" value="{{$course->last_name}}">
                        <span class="text-danger">{{$errors->has('last_name')? $errors->First('last_name'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Duration (how many months?)</label>
                        <input type="number" required class="form-control" name="month_number" value="{{$course->month_number}}">
                        <span class="text-danger">{{$errors->has('month_number')? $errors->First('month_number'): ''}}</span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Fee (per month)</label>
                        <input type="number" required class="form-control" name="fee" value="{{$course->fee}}">
                        <span class="text-danger">{{$errors->has('fee')? $errors->First('fee'): ''}}</span>

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