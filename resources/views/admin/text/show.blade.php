@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Walking Text in front of Home Page</h3>
            </div>

            <form action="{{route('text.store', ['text'=> $text->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">


                    <div class="form-group">
                        <label for="exampleInputEmail1">Walking Notice (marquee)</label>
                        <input type="text" class="form-control" name="text"
                               id="exampleInputEmail1" value="{{$text->text}}"
                               placeholder="Type Designation of Speaker">
                        <span class="text-danger">{{$errors->has('text')? $errors->First('text'): ''}}</span>
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