@extends('backend.master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        <div class="row">
                            <div class="col-lg-6">
                                <b><i class="far fa-images"></i> Banners</b>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a href="{{url('add/banner/page')}}" class="btn btn-light btn-sm rounded text-info">Add New Banner</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($banners as $banner)
                                <div class="col-md-2 mb-3">
                                    <img src="{{url($banner->banner_image)}}" class="img-fluid mb-2">
                                    <a href="{{url('edit/banner/page')}}/{{$banner->id}}" class="btn btn-sm btn-info rounded text-white">Edit</a>
                                    <a href="{{url('delete/banner')}}/{{$banner->id}}" class="btn btn-sm btn-danger rounded text-white">Delete</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        <b><i class="far fa-image"></i> Posters</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <form action="{{url('add/new/poster')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Poster Link :</label>
                                        <input type="text" name="link" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Poster Image :</label>
                                        <input type="file" id="image" class="pb-4 form-control @error('image') is-invalid @enderror" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <img id="blah" class="img-fluid">

                                    <input type="submit" value="Add New Poster" class="btn btn-sm btn-info rounded mt-3">
                                </form>
                            </div>
                            <div class="col-lg-8">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Poster Link</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sl=1; ?>
                                        @foreach ($posters as $poster)
                                        <tr>
                                            <th scope="row">{{$sl}}</th>
                                            <td><img src="{{url($poster->image)}}" height="40" width="40"></td>
                                            <td>{{$poster->link}}</td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$poster->id}}" data-original-title="Edit" class="edit btn btn-warning btn-sm rounded editProduct"><i class="far fa-edit"></i></a>
                                                <a href="{{url('delete/poster')}}/{{$poster->id}}" class="btn btn-sm btn-danger rounded"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <?php $sl++ ?>
                                        @endforeach

                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>

                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal">
                       <input type="hidden" name="product_id" id="product_id">

                        <div class="form-group">
                            <label class="col-sm-8 control-label">Poster Link </label>
                            <div class="col-sm-12">
                                <textarea id="link" name="link" placeholder="Enter Details" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                         </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_js')

<script type="text/javascript">
    $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.editProduct', function () {
            var product_id = $(this).data('id');
            $.get("{{ url('get/poster/link/for/modal') }}" +'/' + product_id +'/edit', function (data) {
                $('#modelHeading').html("Edit Link of Poster");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#product_id').val(data.id);
                $('#link').val(data.link);
            })
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#productForm').serialize(),
                url: "{{ url('edit/poster/link/by/modal') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#productForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    location.reload(true);
                },

                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
    });
</script>



<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    var editor_config = {
      path_absolute : "",
      selector: "textarea[name=tm]",
      plugins: [
        "link image"
      ],
      relative_urls: false,
      height: 129,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>
@endsection
