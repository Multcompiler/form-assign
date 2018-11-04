@extends('main')


@section('title','My Profile')


@section('page_css')
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
                                <a href="#tab_content3" role="tab" id="profile-tab2"
                                   data-toggle="tab" aria-expanded="false">
                                    Profile
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                 aria-labelledby="home-tab">

                                <!-- start recent activity -->
                                <ul class="messages">
                                    <li>
                                        <img src="{{asset('img/user.png')}}" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-info">24</h3>
                                            <p class="month">May</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">Film festivals used to be do-or-die moments?</h4>
                                            <blockquote class="message">Raw denim you probably haven't heard of them
                                                jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro
                                                keffiyeh dreamcatcher synth.Raw denim you probably haven't heard of them
                                                jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro
                                                keffiyeh dreamcatcher synth.
                                            </blockquote>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="byline">
                                                        <span>7 Comments</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <!-- end recent activity -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                <ul class="stats-overview">
                                    <li>
                                        <span class="name"> Firstname</span>
                                        <span class="value text-success"> Geofrey </span>
                                    </li>
                                    <li>
                                        <span class="name"> Lastname </span>
                                        <span class="value text-success"> Philimon </span>
                                    </li>
                                    <li class="hidden-phone">
                                        <span class="name"> Gender </span>
                                        <span class="value text-success"> Male </span>
                                    </li>
                                </ul>

                                <ul class="stats-overview">
                                    <li>
                                        <span class="name"> Date Of Birth </span>
                                        <span class="value text-success"> Oct 3, 1980 </span>
                                    </li>
                                    <li>
                                        <span class="name"> Location </span>
                                        <span class="value text-success"> Zanzibar </span>
                                    </li>
                                    <li>
                                        <span class="name"> Postal Code </span>
                                        <span class="value text-success"> P.O Box 2343 </span>
                                    </li>


                                </ul>
                                <ul class="stats-overview">
                                    <li style="width: 47%;">
                                        <span class="name"> Subscription </span>
                                        <span class="value text-success"> 6 month's </span>
                                    </li>
                                    <li style="width: 50%;">
                                        <span class="name"> End Subscription </span>
                                        <span class="value text-success"> May 6, 2018 </span>
                                    </li>

                                </ul>
                                <ul class="stats-overview">
                                    <li  style="width: 70%;">
                                        <span class="name"> Email </span>
                                        <span class="value text-success"> geophili@gmail.com </span>
                                    </li>
                                    <li  style="width: 27%;">
                                        <a class="btn btn-app">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>


                                </ul>
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

                    <h3 class="name">John Damiel</h3>

                    <div class="flex">
                        <ul class="list-inline count2 text-center">
                            <li>
                                <h4 class="text-center">Bio</h4>
                            </li>
                        </ul>
                    </div>
                    <p>
                        If you've decided to go in development mode and tweak all of this a bit, there are few things
                        you sh
                        ould do.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection


@yield('page_script')
