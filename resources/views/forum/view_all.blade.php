@extends('main')


@section('title','Forum')


@yield('page_css')


@section('main')

    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Forum Post's <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="dashboard-widget-content">

                        <ul class="list-unstyled timeline widget">

                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a href="{{route('view_single_post')}}">Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                        </h2>
                                        <div class="byline">
                                           Posted by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. Film festivals used to be do-or-die moments,They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="byline">
                                                    <span>13 Comments</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="byline">
                                                   <span class="tabs-right">13 hours ago</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a href="{{route('view_single_post')}}">Film festivals used to be do-or-die moments?</a>
                                        </h2>
                                        <div class="byline">
                                            Posted by <a>John Data</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. Film festivals used to be do-or-die moments,They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="byline">
                                                    <span>7 Comments</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="byline">
                                                    <span class="tabs-right">2 days ago</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel tile">

                            <a href="{{route('add_forum_post')}}" class="btn btn-primary btn-block ">Add New Post</a>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel tile">
                        <div class="x_title">
                            <h2>Active Members</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled scroll-view">

                            <li class="media event">
                                <a class="pull-left border-green profile_thumb">
                                    <i class="fa fa-user green"></i>
                                </a>
                                <div class="media-body" style="padding-top: 20px;">

                                    <p><strong></strong> Seleman Yale </p>

                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-green profile_thumb">
                                    <i class="fa fa-user green"></i>
                                </a>
                                <div class="media-body" style="padding-top: 20px;">

                                    <p><strong></strong> Julis007  </p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection


@yield('page_script')
