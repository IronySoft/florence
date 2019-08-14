@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>

            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Title</label>
                        <input type="text" class="form-control" name="first_title"
                               id="exampleInputEmail1"
                               placeholder="Title 1">
                        <span class="text-danger">{{$errors->has('first_title')? $errors->First('first_title'): ''}}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Title</label>
                        <input type="text" class="form-control" name="last_title"
                               id="exampleInputEmail1"
                               placeholder="Title 1">
                        <span class="text-danger">{{$errors->has('last_title')? $errors->First('last_title'): ''}}</span>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" class="form-control" name="description"> </textarea>
                        <span class="text-danger">{{$errors->has('description')? $errors->First('description'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Slider Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose
                                    file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                        <span class="text-danger">{{$errors->has('image')? $errors->First('image'): ''}}</span>
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