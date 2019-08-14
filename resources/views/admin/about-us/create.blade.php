@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Example</h3>
            </div>

            <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description of About Us</label>
                        <textarea id="editor1" class="form-control" name="description"> </textarea>
                        <span class="text-danger">{{$errors->has('description')? $errors->First('description'): ''}}</span>

                    </div>



                    <div class="form-group">
                        <label for="exampleInputFile">Photos which Describe Us</label>
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