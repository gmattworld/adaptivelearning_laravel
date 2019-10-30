@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Fixed Sidebar
        <small>fixed sidebar option</small>
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Sidebar Layouts</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
@endsection
@section('content')
<div class="m-heading-1 border-green m-bordered">
    <h3>DataTables jQuery Plugin</h3>
    <p> DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. </p>
    <p> For more info please check out
        <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official documentation</a>
    </p>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Managed Table</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Status </th>
                            <th> Joined </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> shuxer </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                            <td class="center"> 12 Jan 2012 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> looper </td>
                            <td>
                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> user1wow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-danger"> Blocked </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> restest </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> foopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-info"> Info </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-danger"> Rejected </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> coop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-info"> Info </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> pppol </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-danger"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> goop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> toopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> tes21t </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> fop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> kop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> vopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> wap </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> toop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

@section('pagestyle')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ URL::asset('admin/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pageplugin')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ URL::asset('admin/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pagescript')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::asset('admin/assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
