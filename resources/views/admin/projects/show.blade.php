@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>

            <form action="{{route('project.update',['project'=>$project->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Project Title</label>
                        <input type="text" class="form-control" name="title"
                               id="exampleInputEmail1" value="{{$project->title}}"
                               placeholder="Title 1">
                        <span class="text-danger">{{$errors->has('title')? $errors->First('title'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label>Project Description</label>
                        <textarea id="editor1" class="form-control" name="description">{{$project->description}} </textarea>
                        <span class="text-danger">{{$errors->has('description')? $errors->First('description'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Project Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose
                                    file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                            <img src="{{asset($project->image)}}">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

        <!-- /.card -->

    </div>
@endsection