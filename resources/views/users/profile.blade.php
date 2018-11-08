@extends('main')


@section('title','View User')


@section('page_css')
    {{Html::style('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}

    <style type="text/css">
        .profile-pic {
            position: relative;
            display: inline-block;
        }

        .profile-pic:hover .edit {
            display: block;
        }

        .edit {
            padding-top: 0;
            padding-right: 20px;
            position: absolute;
            right: 10%;
            top: 0;
            display: none;
            z-index: 99999;
        }

        .edit a {
            color: #000;
        }
    </style>

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


        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab_content1" id="home-tab" role="tab"  data-toggle="tab" aria-expanded="true">
                                    Posts
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tab_content2" role="tab" id="profile-tab2"
                                   data-toggle="tab" aria-expanded="false">
                                    Profile
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tab_content3" role="tab" id="profile-tab3"
                                   data-toggle="tab" aria-expanded="false">
                                    Subscription's
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                 aria-labelledby="home-tab">

                                <!-- start recent activity -->
                                @if($posts_count > 0)
                                    <ul class="messages">
                                    @for($i = 0; $i < sizeof($post_details) ; $i++)

                                            <li>
                                                <img src="{{asset('img/user.png')}}" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-info">{{ucfirst($post_details[$i]['posted_date'])}}</h3>
                                                    <p class="month">{{ucfirst($post_details[$i]['posted_month'])}}</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">{{ucfirst($post_details[$i]['title'])}}</h4>
                                                    <blockquote class="message">
                                                        {!! ucfirst($post_details[$i]['body']) !!}
                                                    </blockquote>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="byline">
                                                                <span>{{ucfirst($post_details[$i]['comments_count'])}} Comments</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                    @endfor
                                    </ul>
                                @else
                                    <div class="message_wrapper">

                                        <blockquote class="message">
                                            No post Available
                                        </blockquote>

                                    </div>
                                @endif
                                <!-- end recent activity -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <ul class="stats-overview">
                                    <li>
                                        <span class="name"> Firstname</span>
                                        <span class="value text-success"> {{ucfirst($user_details[0]['firstname'])}} </span>
                                    </li>
                                    <li>
                                        <span class="name"> Lastname </span>
                                        <span class="value text-success"> {{ucfirst($user_details[0]['lastname'])}} </span>
                                    </li>
                                    <li class="hidden-phone">
                                        <span class="name"> Gender </span>
                                        <span class="value text-success"> {{ucfirst($user_details[0]['gender'])}} </span>
                                    </li>
                                </ul>

                                <ul class="stats-overview">
                                    <li>
                                        <span class="name"> Date Of Birth </span>
                                        <span class="value text-success"> {{ucfirst($user_details[0]['date_of_birth'])}}</span>
                                    </li>
                                    <li>
                                        <span class="name"> Location </span>
                                        <span class="value text-success"> {{ucfirst($user_details[0]['location'])}} </span>
                                    </li>
                                    <li>
                                        <span class="name"> Postal Code </span>
                                        <span class="value text-success"> {{ucfirst($user_details[0]['postal_code'])}} </span>
                                    </li>


                                </ul>
                                <ul class="stats-overview">
                                    @if($check_subscription === "Expired")
                                    <li style="width: 100%;">
                                        <span class="name"> Status </span>
                                        <span class="value text-success"> {{$check_subscription}} </span>
                                    </li>
                                    @else
                                        <li style="width: 47%;">
                                            <span class="name"> Subscription </span>
                                            <span class="value text-success"> {{  $subscription_days }} </span>
                                        </li>
                                        <li style="width: 50%;">
                                            <span class="name"> Status </span>
                                            <span class="value text-success"> {{$check_subscription}} </span>
                                        </li>
                                    @endif
                                </ul>
                                <ul class="stats-overview">
                                    <li  style="width: 70%;">
                                        <span class="name"> Email </span>
                                        <span class="value text-success">  {{ucfirst($user_details[0]['email'])}}</span>
                                    </li>
                                    <li  style="width: 27%;">
                                        <a href="/user/edit/{{$user_details[0]['id']}}" class="btn btn-app">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="/user/confirm-delete/{{$user_details[0]['id']}}" class="btn btn-app">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                             @for($i = 0; $i < sizeof($user_data) ; $i++)
                                    <div class="message_wrapper">
                                        <h4 class="heading">From: {{ucfirst($user_data[$i]['start_date'])}}   ,To:  {{ucfirst($user_data[$i]['end_date'])}}</h4>
                                        <blockquote class="message" style="font-size: 14px;">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    Token: {{ucfirst($user_data[$i]['token'])}} <br/>
                                                    Days Remain: {{ucfirst($user_data[$i]['days_remain'])}}
                                                </div>
                                                <div class="col-md-2">
                                                    @if($user_data[$i]['status'] == "Expired")
                                                       <span class="label label-danger"> {{ucfirst($user_data[$i]['status'])}}</span>
                                                    @else
                                                        <span class="label label-success"> {{ucfirst($user_data[$i]['status'])}}</span>
                                                    @endif
                                                </div>
                                            </div>

                                        </blockquote>
                                        <br><hr/>
                                    </div>

                               @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 widget widget_tally_box">
            <div class="x_panel">
                <div class="x_content">

                    <div class="flex">
                        <ul class="list-inline widget_profile_box">
                            <li>
                                <a>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>

                                <div class="profile-pic">
                                    <img src="{{asset('img/user.png')}}" alt="..." class="img-circle profile_img"
                                         style="margin: -28px 7px 0;">
                                    <div class="edit"><a data-toggle="modal" data-target="#modal_profile"><i
                                                    class="fa fa-pencil fa-lg"></i></a></div>

                                    <div id="modal_profile" class="modal fade" tabindex="-1" role="dialog"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Profile Picture</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="file" id="profile_picture" class="form-control"
                                                           placeholder="Upload Profile">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <h3 class="name">{{$user_details[0]['firstname']}} {{$user_details[0]['lastname']}}</h3>

                    <div class="flex">
                        <ul class="list-inline count2 text-center">
                            <li>
                                <h4 class="text-center">Bio</h4>
                            </li>
                        </ul>
                    </div>
                    <p>
                        {{$user_details[0]['bio']}}
                    </p>
                </div>
            </div>
        </div>





        </div>
@endsection


@section('page_script')

@endsection
