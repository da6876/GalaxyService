@extends('admin.admin_layout')
@section('title', 'Home')
@section('body_item')

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Add Slider</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('mySkill')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body">Add Education</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('myEducation')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Add Service</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('myServices')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Add Social Icon</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('mySocialIcon')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Newly Contact Info</div>
                        <div class="card-body">
                            <div class="table-responsive">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                        <div class="card-body">
                            <canvas id="myBarChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- View Modal -->
    <div class="modal fade" id="modal-show-service-data" tabindex="-1" role="dialog"
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
                        <li class="list-group-item">Name : <span class="text-info" id="con_fullname"></span>
                        </li>
                        <li class="list-group-item">Email : <span class="text-info"
                                                                  id="con_email"></span></li>
                        <li class="list-group-item">Phone : <span class="text-info"
                                                                  id="con_phone"></span></li>
                        <li class="list-group-item">Message : <span class="text-info"
                                                                    id="con_message"></span></li>
                        <li class="list-group-item">Date : <span class="text-info"
                                                                 id="created_at"></span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>

        //Show Data By Ajax
        function showContactDetailsDataFrom(id) {
            $.ajax({
                url: "{{ url('myContactDetailss') }}" + '/' + id,
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    $('#modal-show-service-data').modal('show');
                    $('.modal-title').text(data[0].con_fullname + ' Details Info');
                    $('#con_fullname').text(data[0].con_fullname);
                    $('#con_email').text(data[0].con_email);
                    $('#con_phone').text(data[0].con_phone);
                    $('#con_message').text(data[0].con_message);
                    $('#created_at').text(data[0].created_at);
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


    </script>
@endsection

