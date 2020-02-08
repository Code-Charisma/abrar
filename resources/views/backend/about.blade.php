@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-header bg-success text-white">
                    <b><i class="fas fa-users"></i> About Us</b>
                </div>
                <div class="card-body">
                    <form action="{{url('add/about/details')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><b>Previous Image :</b></label>
                                    @if($about->image != null)
                                        <img src="{{url($about->image)}}" alt="No Image" height="80" width="120" class="mb-2">
                                    @endif
                                    <input type="file" id="image" class="form-control" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    <img id="blah" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label><b>Why We Are :</b></label>
                                    <textarea name="reason" class="form-control">{!! $about->reason !!}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <label><b>Our Experiance :</b></label>
                                <textarea name="experiance" class="form-control">{!! $about->experiance !!}</textarea>
                            </div>
                            <div class="col-lg-6">
                                <label><b>Our Works :</b></label>
                                <textarea name="works" class="form-control">{!! $about->works !!}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pt-5 text-center">
                                <input type="submit" value="Update" class="btn btn-success rounded">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer_js')
  <script>
   var route_prefix = "/filemanager";
  </script>

  <!-- CKEditor init -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
  <script>
    $('textarea[name=reason]').ckeditor({
      height: 150,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
  </script>
  <script>
    $('textarea[name=experiance]').ckeditor({
      height: 150,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
  </script>
  <script>
    $('textarea[name=works]').ckeditor({
      height: 150,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
  </script>
@endsection
