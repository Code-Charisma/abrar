@extends('backend.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        <b>Add New Banner</b>
                    </div>
                    <div class="card-body">
                        <form action="{{url('add/new/banner')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Banner Heading :</label>
                                <input type="text" name="banner_heading" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Banner Title :</label>
                                <input type="text" name="banner_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Banner Text :</label>
                                <input type="text" name="banner_text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Button Name :</label>
                                <input type="text" name="btn_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Button Link :</label>
                                <input type="text" name="btn_link" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image">Your Image :</label>
                                <input type="file" id="image" class="pb-4 form-control @error('image') is-invalid @enderror" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group text-center mt-5">
                                <input type="submit" value="Submit" class="btn btn-success">
                                <input type="reset" value="Clear All" class="btn btn-danger rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <img id="blah" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
