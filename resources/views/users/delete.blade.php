@extends('main')


@section('title','Delete User')


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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="alert alert-success alert-dismissible text-center">
                                <h4><i class="icon fa fa-check"></i> Success!</h4>
                                Are you sure you want to remove this user ? <br/>
                                <strong>By Delete this user will remove all the posts and profiles for this user</strong> <br/>
                                Name: {{$user_details[0]['firstname']}}  {{$user_details[0]['lastname']}} <br/>
                                Role: {{$user_details[0]['role']}}
                            </div>
                        </div>
                        {!! Form::open(['route' => ['delete_information_user', $user_details[0]['id']],'method' => 'DELETE']) !!}
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                <button type="submit" class="btn btn-primary">Confirm </button>
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection


@section('page_script')

@endsection
