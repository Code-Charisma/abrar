@extends('backend.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        <b><i class="fas fa-layer-group"></i> Add New Category</b>
                    </div>
                    <div class="card-body">
                        <form action="{{url('add/new/category')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Category Name :</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Service Name" required>
                            </div>
                            <input type="submit" value="Add Category" class="btn btn-sm btn-success rounded mt-4">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        <b><i class="fas fa-layer-group"></i> View All Catgories</b>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Catgory Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl=1; ?>
                                @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{$sl}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$category->id}}" data-original-title="Edit" class="mr-2 rounded edit btn btn-primary btn-sm editProduct"><i class="far fa-edit"></i></a>
                                        <a href="{{url('delete/category')}}/{{$category->id}}" class="btn btn-sm btn-danger text-white rounded"><i class="fas fa-trash-alt"></i></a>
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
                        <label for="name" class="col-sm-6 control-label">Category Name :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" required="">
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
        $.get("{{ url('/get/category/name') }}" +'/' + product_id +'/edit', function (data) {
            $('#modelHeading').html("Edit Service Name");
            $('#saveBtn').val("edit-user");
            $('#ajaxModel').modal('show');
            $('#product_id').val(data.id);
            $('#name').val(data.name);
        })
     });

      $('#saveBtn').click(function (e) {
          e.preventDefault();
          $(this).html('Sending..');
          $.ajax({
            data: $('#productForm').serialize(),
            url: "{{ url('edit/category/name') }}",
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
@endsection
