@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>

            <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Author Name</label>
                        <input type="text" class="form-control" name="author_name"
                               id="exampleInputEmail1"
                               placeholder="Type Author's Name">
                        <span class="text-danger">{{$errors->has('author_name')? $errors->First('author_name'): ''}}</span>
                    </div>

                    <div class="form-group">
                        <label>Speech</label>
                        <textarea class="form-control" name="speech"> </textarea>
                        <span class="text-danger">{{$errors->has('speech')? $errors->First('speech'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Author's Image</label>
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

                    <div class="form-group">
                        <label for="exampleInputEmail1">Designation</label>
                        <input type="text" class="form-control" name="designation"
                               id="exampleInputEmail1"
                               placeholder="Type Designation of Speaker">
                        <span class="text-danger">{{$errors->has('designation')? $errors->First('designation'): ''}}</span>
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