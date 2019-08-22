

@extends('front.master')
@section('title', 'Admission | Florence Nursing Center')
@section('body')
    <div id="colorlib-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Students Information</h3>
                        </div>

                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" required class="form-control" name="first_name">
                                    <span class="text-danger">{{$errors->has('first_name')? $errors->First('first_name'): ''}}</span>

                                </div><div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" required class="form-control" name="last_name">
                                    <span class="text-danger">{{$errors->has('last_name')? $errors->First('last_name'): ''}}</span>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Name</label>
                                    <select type="number" required class="form-control" name="month_number">
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <span class="text-danger">{{$errors->has('month_number')? $errors->First('month_number'): ''}}</span>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Fee (per month)</label>
                                    <input type="number" required class="form-control" name="fee">
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

            </div>
        </div>
    </div>
@endsection