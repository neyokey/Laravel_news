@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
      <div id="breadcrumb"> 
          <a href="<?= url("/admin/"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
          <a href="<?= url("/admin/post/"); ?>">Post </a>
          <a href="" class="current">Edit </a>
      </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
    </div>
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit post</h5>
        </div>
        <div class="widget-content nopadding ">
          <form enctype="multipart/form-data" method="post" accept-charset="utf-8" 
              class="form-horizontal" action="<?= url('/admin/post/edit/'.$post[0]->id); ?>">
            @csrf
            <div style="display:none;"><input type="hidden" name="_method" value="POST"/>
            </div>
            <div class="control-group ">
              <label class="control-label">Name</label>
              <div class="controls">
                  <div class="input text required">
                      <input type="text" name="name" class="span6" value="<?= $post[0]->name?>" required="required" id="name" />
                  </div>
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label">Image</label>
              <div class="controls">
                  <div class="input text required">
                      <input type="text" name="image" class="span6" value="<?= $post[0]->image?>" required="required" id="image" />
                  </div>
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label">Content</label>
              <div class="controls">
                <div class="input text required">
                    <textarea name="content" id="summernote" required="required"><?= $post[0]->content?></textarea>
                </div>
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label">View count</label>
              <div class="controls">
                  <div class="input text required">
                      <input type="text" name="view" class="span6" value="<?= $post[0]->view?>" required="required" maxlength="50" id="view" />
                  </div>
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label">Type</label>
              <div class="controls">
                  <select name='posttype_id' class="span6">
                          <?php
                  foreach ($posttype as  $value_type) {
                      echo '<option value="'.$value_type->id.'"';
                      if($value_type->id == $post[0]->posttype_id)
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
