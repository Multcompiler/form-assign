@extends('main')


@section('title','View Users')


@section('page_css')
    {{Html::style('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}

@endsection


@section('main')

    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Errors!</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                    <div class="x_content">
                        <h4 class="text-muted font-13 m-b-30" style="margin-bottom: 20px;">
                            All System Users
                        </h4>
                        <table id="datatable1" class="table table-striped table-bordered user_list">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>Date of Birth</th>
                                <th>Postal Code</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                            </thead>


                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('page_script')

    <script>
        $(document).ready(function () {
            var table = $('#datatable1').DataTable( {
                "ajax": "/get/all/users",
                "columns": [
                    { "data" : "firstname" },
                    { "data" : "lastname" },
                    {
                        "data": "id",
                        "bSortable": false,
                        "mRender": function(data, type, full) {
                            if(full.status == "inactive"){
                                return '<button type="button" class="btn btn-danger btn-xs">Inactive</button>';
                            }else{
                                return '<button type="button" class="btn btn-success btn-xs">Active</button>';
                            }

                        }
                    },
                    { "data" : "email" },
                    { "data" : "location" },
                    { "data" : "date_of_birth" },
                    { "data" : "postal_code" },
                    { "data" : "role" },
                    {
                        "data": "id",
                        "bSortable": false,
                        "mRender": function(data, type, full) {
                                if(full.role != "Superadministrator"){
                                    return  '<div class="btn btn-group">'+
                                    '<a href="/user/edit/'+full.id+'" class="btn btn-info btn-sm">Edit</a>'+
                                    '<a href="/user/view/'+full.id+'" class="btn btn-primary btn-sm">Show</i></a>'+
                                    '<a href="/user/confirm-delete/'+full.id+'" class="btn btn-danger btn-sm">' +
                                    'Delete</a>'+
                                    '<a href="/user/'+full.id+'/membership/add" class="btn btn-info btn-sm">Membership</a>'+
                                    '</div>';
                                }else{
                                    return  '<div class="btn btn-group">'+
                                        '<a href="/user/edit/'+full.id+'" class="btn btn-info btn-sm">Edit</a>'+
                                        '<a href="/user/view/'+full.id+'" class="btn btn-primary btn-sm">Show</i></a>'+
                                        '<a href="/user/confirm-delete/'+full.id+'" class="btn btn-danger btn-sm">' +
                                        'Delete</a>'+
                                        '</div>';
                                }



                        }
                    }
                ]
            });
        });
    </script>
    {{Html::script('vendors/datatables.net/js/jquery.dataTables.min.js')}}
    {{Html::script('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}
    {{Html::script('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/buttons.print.min.js')}}
    {{Html::script('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}
    {{Html::script('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}
    {{Html::script('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}
    {{Html::script('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}
    {{Html::script('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}
    {{Html::script('vendors/jszip/dist/jszip.min.js')}}
    {{Html::script('vendors/pdfmake/build/pdfmake.min.js')}}
    {{Html::script('vendors/pdfmake/build/vfs_fonts.js')}}

@endsection
