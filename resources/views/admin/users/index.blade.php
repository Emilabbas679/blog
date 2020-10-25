@extends("layouts.admin")
@section('title', 'Users')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Users</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">


                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title text-right float-right"><a href="javascript:void(0)" class="edit btn btn-outline-primary btn-md">Create</a></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered yajra-datatable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Operations</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
    <div class="modal center-modal fade" id="modal-center" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Your content comes here</p>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("js")

    <script src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Power BI Admin App -->

    <script src="/back/js/pages/data-table.js"></script>


    <script type="text/javascript">
        $(function () {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/data/users",
                columns: [
                    {data: 'DT_RowIndex', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
                "iDisplayLength" : 25,
                dom: 'Bfrtip',
                buttons: [

                    'copy', 'csv', 'excel', 'pdf', 'print',


                ],
                // select: true

            });

        });
    </script>
@endsection
