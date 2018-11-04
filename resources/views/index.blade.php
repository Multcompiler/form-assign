@extends('main')


@section('title','Home')


@yield('page_css')


@section('main')
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-3 col-xs-6 col-md-offset-8 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count">45</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Posts</span>
            <div class="count green">67</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>

    </div>
    <!-- /top tiles -->




    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Forum Post Response</h2>
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
                    <div class="widget_summary">
                        <div class="w_left w_25">
                            <span>Simba ni noma</span>
                        </div>
                        <div class="w_center w_55">
                            <div class="progress">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="w_right w_20">
                            <span>23k</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                        <div class="w_left w_25">
                            <span>Yanga wajenge uwanja</span>
                        </div>
                        <div class="w_center w_55">
                            <div class="progress">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="w_right w_20">
                            <span>3k</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-12 col-xs-12">
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
                <ul class="list-unstyled top_profiles scroll-view">

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
@endsection


@yield('page_script')
