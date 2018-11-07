@extends('main')


@section('title','Forum')


@yield('page_css')


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
                    <div class="dashboard-widget-content" id="post_data">

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


@section('page_script')
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '/get/all/post',
                type: 'GET',

                success: function (data) {

                    var max_size=data.data.length;
                    $('.search_count').html("Results Found: "+max_size);
                    var sta = 0;
                    var elements_per_page = 10;
                    var limit = elements_per_page;
                    goFun(sta,limit);
                    var  posts_list = '';
                    function goFun(sta,limit) {
                        posts_list += '<ul class="list-unstyled timeline widget">';
                        $.each(data.data, function( key, value ) {
                            posts_list += '<li>'+
                                '<div class="block">'+
                                '<div class="block_content">'+
                                 '<h2 class="title">'+
                                   '<a href="/forum/post/'+value['id']+'">'+value['title']+'</a>'+
                                '</h2>'+
                                '<div class="byline">'+
                                'Posted by <a>'+value['posted_by']+'</a>'+
                                '</div>'+
                                '<p class="excerpt">'+value['body']+
                                '</p>'+
                                '<div class="row">'+
                                '<div class="col-xs-6">'+
                                '<div class="byline">'+
                                '<span>Category: '+value['post_category']+', '+value['comments_count']+' Comments</span>'+
                                '</div>'+
                                '</div>'+
                                '<div class="col-xs-6 text-right">'+
                                '<div class="byline">'+
                                '<span class="tabs-right">2 days ago</span>'+
                                '</div>'+
                                '</div>'+
                                '</div>'+

                                '</div>'+
                                '</div>'+
                                '</li>'; //showing only the first error.
                        });
                        posts_list += '</ul>';


                        $("#post_data").append(posts_list);

                    }
                    $('#nextValue').click(function(){

                        var next = limit;
                        if(max_size>=next) {
                            limit = limit+elements_per_page;
                            goFun(next,limit);
                        }
                    });
                    $('#PreeValue').click(function(){
                        var pre = limit-(2*elements_per_page);
                        if(pre>=0) {
                            limit = limit-elements_per_page;
                            goFun(pre,limit);
                        }
                    });
                }
            });
        });
    </script>
@endsection