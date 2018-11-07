@extends('main')


@section('title','Add Post')


@yield('page_css')


@section('main')

    <div class="row">
        <div class="col-md-12">
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
                <div class="x_title">
                    <h2>Create New Post <small>fill all fields</small></h2>
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
                    <br />
                    <form  method="post" action="{{route('save_forum_post')}}" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Category <span class="required">*</span>
                            </label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <select name="category_id" class="form-control col-md-7 col-xs-12">
                                    <option value=""> -- Default -- </option>
                                    @foreach($post_categories as $post_category)
                                        <option value="{{$post_category->id}}"> {{ucfirst($post_category->category_name)}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Title <span class="required">*</span>
                            </label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <input type="text" id="first-name" name="title" required="required" class="form-control col-md-7 col-xs-12" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Post Body <span class="required">*</span>
                            </label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <textarea id="body" class="body" name="body" rows="10" cols="60" placeholder="Type your post here..." required></textarea>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-2">
                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('page_script')

    <!-- CK Editor -->
     <script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('body')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

@endsection
