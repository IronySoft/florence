@extends('admin.master')
@section('body')

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Example</h3>
            </div>

            <form name="editContent" action="{{route('content.update', ['content'=>$content->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <select required name="course_id" class="form-control">
                            {{--<option >{{$content->course_id}}</option>--}}

                            @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->first_name}} {{$course->last_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->has('course_id')? $errors->First('course_id'): ''}}</span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content Name</label>
                        <input type="text" required class="form-control" name="name" value="{{$content->name}}">
                        <span class="text-danger">{{$errors->has('name')? $errors->First('name'): ''}}</span>

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
       document.forms['editContent'].elements['course_id'].value = '{{$content->course_id}}';
           </script>
@endsection