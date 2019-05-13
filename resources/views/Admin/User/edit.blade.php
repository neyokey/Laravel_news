@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="<?= url("/admin/user"); ?>" title="Ứng viên" >User </a>
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
                    <h5>Edit user</h5>
                </div>
                <div class="widget-content nopadding ">
                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8" 
                        class="form-horizontal" action="<?= url('/admin/user/edit/'.$user[0]->id); ?>">
                        @csrf
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"/>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="name" class="span6" value="<?= $user[0]->name?>" required="required" maxlength="50" id="name" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="email" class="span6" value="<?= $user[0]->email?>" required="required" maxlength="50" id="email" />
                                    @if($errors->has('email'))
                                        <p style="color:red">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Password</label>
                            <div class="controls">
                                <div class="input text required">
                                    <input type="text" name="password" class="span6" value="<?= $user[0]->password?>" required="required" maxlength="50" id="password" />
                                </div>
                                @if($errors->has('password'))
                                    <p style="color:red">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Type</label>
                            <div class="controls">
                                <select name='usertype' class="span6">
                                        <?php
                                foreach ($usertype as  $value_type) {
                                    echo '<option value="'.$value_type->id.'"';
                                    if($value_type->id == $user[0]->usertype_id)
                                        echo 'selected="selected"';
                                    echo '>'.$value_type->name.'</option>';
                                }
                                ?>
                                </select>
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