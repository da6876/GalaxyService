@extends('admin.admin_layout')
@section('title', 'My Working Menu')
@section('body_item')

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">My Working Menu</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{url('/AdminHome')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">My Working Menu</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>
                    My Working Menu

                    <button type="button" onclick="AddUserTypeData()" class="btn btn-primary  btn-sm"
                            data-toggle="modal" data-target="#exampleModalCenter">
                        Add Working Menu
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="slider-dataTabel" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- View Modal -->
    <div class="modal fade" id="modal-show-socialIcon-single-data" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">Title: <span class="text-success" id="work_main_menu_name_S"></span></li>
                        <li class="list-group-item">Details : <span class="text-success" id="work_main_menu_details_S"></span></li>
                        <li class="list-group-item">Image : <span class="text-success" id="work_main_menu_type_S"></span></li>
                        <li class="list-group-item">Status : <span class="text-success" id="work_main_menu_image_S"></span></li>
                        <li class="list-group-item">Status : <span class="text-success" id="work_main_menu_status_S"></span></li>
                        <li class="list-group-item">Create Date : <span class="text-success" id="created_at_S"></span>
                        </li>
                        <li class="list-group-item">Update Date : <span class="text-success" id="updated_at_S"></span></li>

                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" id="modal-add-socialIcon-data" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="addData_from" data-toogle="valibator" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Work Main Menu Name</label>
                            <input type="text" class="form-control" name="work_main_menu_name">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Work Main Menu Details</label>
                            <input type="text" class="form-control" name="work_main_menu_details">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Work Main Menu Type</label>
                            <input type="text" class="form-control" name="work_main_menu_type">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Image File</label>
                            <input type="file" class="form-control" name="work_main_menu_image">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status Select</label>
                            <select class="form-control" name="work_main_menu_status">
                                <option value="A">A</option>
                                <option value="B">N</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-insert-socialIcon"></button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="modal-edit-socialIcon-data" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="addData_from" data-toogle="valibator" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <input type="hidden" class="form-control" id="social_icons_idU" name="social_icons_id">

                            <label for="inputEmail" class="col-form-label">Icon</label>
                            <input type="text" class="form-control" name="social_icons_icon" id="social_icons_iconU">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Link</label>
                            <input type="text" class="form-control" name="social_icons_link" id="social_icons_linkU">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="social_icons_name" id="social_icons_nameU">
                        </div>
                        <button type="submit" class="btn btn-primary btn-update-socialIcon"></button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--Education Script--}}
    <script>
        //Show Data useign Yajratable
        var table1 = $('#slider-dataTabel').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('all.myWorkingMenu') !!}',
            columns: [
                {data: 'work_main_menu_id', name: 'work_main_menu_id'},
                {data: 'work_main_menu_name', name: 'work_main_menu_name'},
                {data: 'work_main_menu_details', name: 'work_main_menu_details'},
                {data: 'work_main_menu_type', name: 'work_main_menu_type'},
                {data: 'work_main_menu_image', name: 'work_main_menu_image'},
                {data: 'work_main_menu_status', name: 'work_main_menu_status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        //Show Data By Ajax
        function showSlidereData(id) {
            $.ajax({
                url: "{{ url('myWorkingMenus') }}" + '/' + id,
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    $('#modal-show-socialIcon-single-data').modal('show');
                    $('.modal-title').text(+data[0].slider_title + 'Information');
                    $('#work_main_menu_name_S').text(data[0].work_main_menu_name);
                    $('#work_main_menu_details_S').text(data[0].work_main_menu_details);
                    $('#work_main_menu_type_S').text(data[0].work_main_menu_type);
                    $('#work_main_menu_image_S').text(data[0].work_main_menu_image);
                    $('#work_main_menu_status_S').text(data[0].work_main_menu_status);
                    $('#created_at_S').text(data[0].created_at);
                    $('#updated_at_S').text(data[0].updated_at);

                }, error: function () {
                    swal({
                        title: "Oops",
                        text: "aa",
                        icon: "error",
                        timer: '1500'
                    });
                }
            });
        }

        //Show insert From
        function AddUserTypeData() {
            save_method = 'addWorkMainMenu';
            $('input[name_method]').val('POST');
            $('#modal-add-socialIcon-data').modal('show');
            //$('#modal-add-data addData_from')[0].reset();
            //$(this).find('#modal-add-data')[0].reset();
            $('.modal-title').text('Add Slider Image');
            $('.btn-insert-socialIcon').text('Save Slider');
            $('.modal-body').find('textarea,input').val('');
        }

        //insert Data By Ajax
        $(function () {
            $('#modal-add-socialIcon-data form').on('submit', function (e) {
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();
                    if (save_method == "addWorkMainMenu") {
                        url = "{{ url('myWorkingMenus') }}";
                        $.ajax({
                            url: url,
                            type: "POST",
                            data: new FormData($("#modal-add-socialIcon-data form")[0]),
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                console.log(data);
                                var dataResult = JSON.parse(data);
                                if (dataResult.statusCode == 200) {
                                    $('#modal-add-socialIcon-data').modal('hide');
                                    $('#slider-dataTabel').DataTable().ajax.reload();
                                    swal({
                                        title: "Success",
                                        text: dataResult.statusMsg,
                                        icon: "success",
                                        button: "Great"
                                    });
                                } else if (dataResult.statusCode == 201) {
                                    swal({
                                        title: "Oops",
                                        text: "Error occured !",
                                        icon: "error",
                                        timer: '1500'
                                    });
                                }

                            }, error: function (data) {
                                swal({
                                    title: "Oops",
                                    text: "Error occured !",
                                    icon: "error",
                                    timer: '1500'
                                });
                            }
                        });
                        return false;
                    }
                }
            });
        });

        function deleteSliderData(id) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ url('myWorkingMenus') }}" + '/' + id,
                            type: "POST",
                            data: {'_method': 'DELETE', '_token': csrf_token},
                            success: function (data) {
                                console.log(data);
                                var dataResult = JSON.parse(data);
                                if (dataResult.statusCode == 200) {
                                    $('#slider-dataTabel').DataTable().ajax.reload();
                                    swal({
                                        title: "Delete Done",
                                        text: "Poof! Your data file has been deleted!",
                                        icon: "success",
                                        button: "Done"
                                    });
                                } else {
                                    swal("Your imaginary file is safe!");
                                }
                            }, error: function (data) {
                                swal({
                                    title: "Opps...",
                                    text: "Error occured !",
                                    icon: "error",
                                    button: 'Ok ',
                                });
                            }
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });

        }

    </script>

@endsection