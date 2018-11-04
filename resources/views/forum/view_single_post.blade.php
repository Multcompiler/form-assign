@extends('main')


@section('title','Forum')


@yield('page_css')


@section('main')

    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</h2>
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
                                        <div class="byline">
                                            Posted by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers.
                                            They were where you met the producers that could fund your project,
                                            and if the buyers liked your flick, they’d pay to Fast-forward and…
                                            Film festivals used to be do-or-die moments for movie makers.
                                            They were where you met the producers that could fund your project,
                                            and if the buyers liked your flick, they’d pay to Fast-forward and…
                                            Film festivals used to be do-or-die moments for movie makers.
                                            They were where you met the producers that could fund your project,
                                            and if the buyers liked your flick, they’d pay to Fast-forward and…

                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>12 Comments</small></h2>
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
                <div class="">
                    <ul class="list-unstyled msg_list">
                        <li style="margin: 6px 30px 0;">
                            <a>
                        <span class="image">
                          <img src="{{asset('img/user.png')}}" alt="img" />
                        </span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">45 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                        </span>
                            </a>
                        </li>
                        <li style="margin: 6px 30px 0;">
                            <a>
                        <span class="image">
                          <img src="{{asset('img/user.png')}}" alt="img" />
                        </span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">30 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                        </span>
                            </a>
                        </li>

                    </ul>


                    <div class="form-group" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" placeholder="Write your Comment" class="form-control">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-primary">Send!</button>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@yield('page_script')
