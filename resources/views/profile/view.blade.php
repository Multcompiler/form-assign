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
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well" style="overflow: auto">
                <div class="col-md-9">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                        <input type="text" name="reservation" id="reservation" class="form-control" value="01/01/2016 - 01/25/2016" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <div class="col-md-3">
                    <button href="#" class="btn btn-success btn-block">Request Code</button>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-warning alert-dismissible fade in text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <span style="font-size: 15px;">
                    <strong>Pending!</strong> Please wait while your Code its processing. <br/>
                </span>

            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-info alert-dismissible fade in  text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <span style="font-size: 15px;">
                    <strong>Success!</strong> Your Subscription Code Successful Created. <br/>
                </span>

            </div>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well" style="overflow: auto">
                <div class="row">

                    <div class="col-sm-9">
                        <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="copyTarget">
                                    Token:
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" id="copyTarget" value="8MmWQubXwa4abpVWTOpxEdu99J2z6JJT7hEs3juoBAg" readonly="readonly">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-primary" id="copyButton">Copy</button>
                    </div>
                    <div class="col-md-12 text-center">
                        <span id="msg"></span>
                    </div>
                </div>
            </div>

        </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Activate Account</h2>
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

                        <form class="form-horizontal form-label-left">

                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Token Here...">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-primary">Activate Account!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create Profile <small>Sessions</small></h2>
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
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Personal Information</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Location</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Bio Description</small>
                                          </span>
                                        </a>
                                    </li>

                                </ul>
                                <div id="step-1">
                                    <div class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <select class="form-control">
                                                    <option value=""> -- Default -- </option>
                                                    <option value="male"> Male </option>
                                                    <option value="female"> Female </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="xdisplay_inputx form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left date_of_birth" id="single_cal2" placeholder="Date Of Birth" aria-describedby="inputSuccess2Status2">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div id="step-2">
                                    <div class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Location <span class="required">*</span>
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">P.o Box <span class="required">*</span>
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="453">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-3">
                                    <div class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bio <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7 col-sm-7w col-xs-12">
                                            <textarea  name="bio" class="form-control col-md-7 col-xs-12" required="required"></textarea>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End SmartWizard Content -->

                        </div>
                    </div>
                </div>
            </div>

@endsection


@section('page_script')

    <script>
        document.getElementById("copyButton").addEventListener("click", function() {
            copyToClipboardMsg(document.getElementById("copyTarget"), "msg");
        });

        function copyToClipboardMsg(elem, msgElem) {
            var succeed = copyToClipboard(elem);
            var msg;
            if (!succeed) {
                msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
            } else {
                msg = "Token copied to the clipboard."
            }
            if (typeof msgElem === "string") {
                msgElem = document.getElementById(msgElem);
            }
            msgElem.innerHTML = msg;
            setTimeout(function() {
                msgElem.innerHTML = "";
            }, 2000);
        }

        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand("copy");
            } catch(e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = "";
            }
            return succeed;
        }
    </script>

    {{Html::script('vendors/fastclick/lib/fastclick.js')}}
    {{Html::script('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}

@endsection
