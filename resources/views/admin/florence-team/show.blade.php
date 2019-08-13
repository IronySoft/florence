@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Florence Example</h3>
            </div>

            <form action="{{route('florence.update',['florence'=>$florence->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Member Name</label>
                        <input type="text" class="form-control" name="name"
                               id="exampleInputEmail1" value="{{$florence->name}}"
                               placeholder="Name of Florence Team Member">
                        <span class="text-danger">{{$errors->has('name')? $errors->First('name'): ''}}</span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Designation</label>
                        <input type="text" class="form-control" name="designation"
                               id="exampleInputEmail1" value="{{$florence->designation}}"
                               placeholder="Designation of Team Member">
                        <span class="text-danger">{{$errors->has('designation')? $errors->First('designation'): ''}}</span>
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
                            <img src="{{asset($florence->image)}}">
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