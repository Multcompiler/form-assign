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
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            All System Users
                        </p>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>Date of Birth</th>
                                <th>Postal Code</th>
                                <th></th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Tiger</td>
                                <td>Architect</td>
                                <td>Male</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Active</button>
                                </td>
                                <td>Tiger@gmail.com</td>
                                <td>Kimara</td>
                                <td>2000/04/25</td>
                                <td>P.o Box 2013</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger</td>
                                <td>Architect</td>
                                <td>Male</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Active</button>
                                </td>
                                <td>Tiger@gmail.com</td>
                                <td>Kimara</td>
                                <td>2000/04/25</td>
                                <td>P.o Box 2013</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger</td>
                                <td>Architect</td>
                                <td>Male</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-xs">Disabled</button>
                                </td>
                                <td>Tiger@gmail.com</td>
                                <td>Kimara</td>
                                <td>2000/04/25</td>
                                <td>P.o Box 2013</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('page_script')

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
