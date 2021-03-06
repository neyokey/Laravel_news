@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="<?= url("/admin/usertype"); ?>" title="Ứng viên" >Usertype </a>
            <a href="" class="current">Add </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
        </div>
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> 
                    <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Add usertype</h5>
                </div>
                <div class="widget-content nopadding ">
                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8" 
                        class="form-horizontal" action="<?= url('/admin/usertype/add/'); ?>">
                        @csrf
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"/>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="name" class="span6" required="required" maxlength="50" id="name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                          <a onclick="window.history.back();" class="btn btn-success pull-left"> <i class="icon-arrow-left"></i>Back</a>
                          <button class="btn btn-success pull-right" type="submit">Submit</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  