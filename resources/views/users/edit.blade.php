@extends('main')


@section('title','Edit User')


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
                        {!! Form::model($user_details[0], ['route' => ['save_edited_user', $user_details[0]['id']],'method' => 'PUT'],['data-parsley-validate' => '']) !!}

                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="{{$user_details[0]['id']}}">
                            <div class="input-group col-md-12">
                                <label for="firstname" class="control-label">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{$user_details[0]['email']}}" required>
                            </div>
                            <div class="input-group col-md-12">
                                <label for="firstname" class="control-label">Firstname:</label>
                                <input type="text" name="firstname" class="form-control" value="{{$user_details[0]['firstname']}}" required>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="lastname" class="control-label">Lastname:</label>
                                <input type="text" name="lastname" class="form-control" value="{{$user_details[0]['lastname']}}" required>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="" class="control-label">Gender:</label>
                                <select name="gender" class="form-control" required>
                                    <option value=""> -- Default --</option>
                                    <option value="male" {{($user_details[0]['gender'] == "male" ? "selected":"")}}> Male </option>
                                    <option value="female" {{($user_details[0]['gender'] == "female" ? "selected":"")}}> Female </option>
                                </select>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="email" class="control-label">Date of birth:</label>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="xdisplay_inputx form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left date_of_birth" name="date_of_birth" id="single_cal2" value="{{$user_details[0]['date_of_birth']}}" placeholder="Date Of Birth" aria-describedby="inputSuccess2Status2">
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="phone" class="control-label">Location:</label>
                                <input type="text" name="location" class="form-control" value="{{$user_details[0]['location']}}" required>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="phone" class="control-label">Postal Code:</label>
                                <input type="text" name="postal_code" class="form-control" value="{{$user_details[0]['postal_code']}}" required>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="" class="control-label">Status:</label>
                                <select name="status" class="form-control" required>
                                    <option value=""> -- Default --</option>
                                    <option value="active"> Active </option>
                                    <option value="inactive"> Inactive </option>
                                </select>
                            </div>
                            <br/>
                            <div class="input-group col-md-12">
                                <label for="phone" class="control-label">Bio:</label>
                                {{ Form::textarea('bio',$user_details[0]['bio'], ['id'=>'comment-comment','class' => 'form-control', 'rows' => '3']) }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save changes
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('page_script')

@endsection
