@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="<?= url("/admin/".$name); ?>" title="Ứng viên" ><?= $name ?></a>
            <a href="" class="current"><?= $action; ?> <?= $name ?></a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
        </div>
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> 
                    <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5><?= $action; ?> <?= $name; ?></h5>
                </div>
                <div class="widget-content nopadding ">
                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8" 
                        class="form-horizontal" action="/lvtn/loainguoidung/edit/1">
                        <div style="display:none;"><input type="hidden" name="_method" value="PUT"/>
                        </div>
                        <?php
                            foreach ($columns as  $value) {
                                if($value == 'id' || $value == 'status')
                                    continue;
                                else
                                ?>
                                    <div class="control-group ">
                                        <label class="control-label"><?= $value ?></label>
                                        <div class="controls">
                                            <div class="input text required"><input type="text" name="<?= $value ?>" class="span6" placeholder="<?= $value ?>" required="required" maxlength="50" id="<?= $value ?>" /></div>              
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                        
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