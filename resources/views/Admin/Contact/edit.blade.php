@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="<?= url("/admin/contact"); ?>" title="Ứng viên" >Contact </a>
            <a href="" class="current">Edit </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
        </div>
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> 
                    <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Edit contact</h5>
                </div>
                <div class="widget-content nopadding ">
                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8" 
                        class="form-horizontal" action="<?= url('/admin/contact/edit/'.$contact[0]->id); ?>">
                        @csrf
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"/>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Brand name</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="brand_name" class="span6" value="<?= $contact[0]->brand_name?>" required="required" maxlength="50" id="name" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Address</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="address" class="span6" value="<?= $contact[0]->address?>" required="required" maxlength="50" id="address" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Phone</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="phone" class="span6" value="<?= $contact[0]->phone?>" required="required" maxlength="50" id="phone" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="email" class="span6" value="<?= $contact[0]->email?>" required="required" maxlength="50" id="email" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Facebook URL</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="link_fb" class="span6" value="<?= $contact[0]->link_fb?>" required="required" maxlength="50" id="link_fb" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Instagram URL</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="link_ins" class="span6" value="<?= $contact[0]->link_ins?>" required="required" maxlength="50" id="link_ins" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Youtube URL</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="link_yt" class="span6" value="<?= $contact[0]->link_yt?>" required="required" maxlength="50" id="link_yt" />
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