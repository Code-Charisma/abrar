@extends('backend.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        <b>Edit Banner</b>
                    </div>
                    <div class="card-body">
                        <form action="{{url('edit/banner')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$banner_data->id}}" name="id">

                            <div class="form-group">
                                <label>Banner Heading :</label>
                                <input type="text" name="banner_heading" class="form-control" value="{{$banner_data->banner_heading}}">
                            </div>
                            <div class="form-group">
                                <label>Banner Title :</label>
                                <input type="text" name="banner_title" class="form-control" value="{{$banner_data->banner_title}}">
                            </div>
                            <div class="form-group">
                                <label>Banner Text :</label>
                                <input type="text" name="banner_text" class="form-control" value="{{$banner_data->banner_text}}">
                            </div>
                            <div class="form-group">
                                <label>Button Name :</label>
                                <input type="text" name="btn_name" value="{{$banner_data->btn_name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Button Link :</label>
                                <input type="text" name="btn_link" value="{{$banner_data->btn_link}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image">Your Image :</label>
                                <input type="file" id="image" class="pb-4 form-control @error('image') is-invalid @enderror" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group text-center mt-5">
                                <input type="submit" value="Update" class="btn btn-success">
                                <input type="reset" value="Clear All" class="btn btn-danger rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <b>Previous Image:</b>
                <img src="{{url($banner_data->banner_image)}}" class="img-fluid mb-3">
                <div class="form-group">
                    <img id="blah" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
