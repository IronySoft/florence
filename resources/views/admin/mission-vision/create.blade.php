@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Florence Example</h3>
            </div>

            <form action="{{route('goal.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title of Goal</label>
                        <input type="text" class="form-control" name="title"
                               id="exampleInputEmail1"
                               placeholder="Title of Mission & Vision">
                        <span class="text-danger">{{$errors->has('title')? $errors->First('title'): ''}}</span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description of Goal</label>
                        <textarea id="editor1" class="form-control" name="description"> </textarea>
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