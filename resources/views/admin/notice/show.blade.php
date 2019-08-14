@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Notice Info</h3>
            </div>

            <form name="editNotice" action="{{route('notice.update' ,['notice'=>$notice->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title of Notice</label>
                        <input required type="text" class="form-control" name="title"
                               id="exampleInputEmail1" value="{{$notice->title}}"
                               placeholder="Title of Notice">
                        <span class="text-danger">{{$errors->has('title')? $errors->First('title'): ''}}</span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input required type="text" class="form-control" name="price"
                               id="exampleInputEmail1" value="{{$notice->price}}"
                               placeholder="Book Price">
                        <span class="text-danger">{{$errors->has('price')? $errors->First('price'): ''}}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <textarea required class="form-control" name="location">{{$notice->location}} </textarea>
                        <span class="text-danger">{{$errors->has('location')? $errors->First('location'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Characteristics</label>
                        <textarea required class="form-control" name="description">{{$notice->description}} </textarea>
                        <span class="text-danger">{{$errors->has('description')? $errors->First('description'): ''}}</span>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Book Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input required name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose
                                    file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                        <img src="{{asset($notice->image)}}" width="100" height="100">
                        <span class="text-danger">{{$errors->has('image')? $errors->First('image'): ''}}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Notice Type</label>
                        <select required class="form-control" name="type">
                            <option value="1">Book Related </option>
                            <option value="2">Others</option>
                        </select>
                        <span class="text-danger">{{$errors->has('type')? $errors->First('type'): ''}}</span>

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
    <script>
        document.forms['editNotice'].elements['type'].value = '{{$notice->type}}';
    </script>
@endsection