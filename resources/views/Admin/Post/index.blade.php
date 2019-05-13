@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" class="current">Post</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <form method="post" action="">
        <div class="widget-box">
          <div class="widget-content nopadding">
            <select name="status" class="span2 input_search">
                <option value="">Trạng thái</option>
                <option value="0">Chưa xác nhận(giao)</option>
                <option value="1">Đang giao</option>
                <option value="2">Hoàn thành</option>
                <option value="3">Đã hủy</option>
            </select>
            <input class="input_search span3" type="text" name="info" value="" placeholder="Id, Tên, SĐT hoặc Địa Chỉ người nhận">
            <a href="" class="btn btn-danger pull-right input_search"><i class="icon-ban-circle"></i> Xóa điều kiện </a>              
            <button onclick='submit_url("form_submit","{{url('admin/transaction')}}","get");' class="btn btn-success pull-right input_search"><i class="icon-save"></i> Xem DS </button>
            <div style="clear: both;"></div>
          </div>
        </div>
      </form>
    </div>
    <div class="row-fluid">
      <form method="post" action="">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-content nopadding">
              <ul class="recent-posts"> 
                <li>
                  <a href="<?= url('/admin/post/add'); ?>" class="btn btn-success btn-mini">ADD</a>
                </li>
              </ul>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Insert time</th>
                    <th>View count</th>
                    <th>Type</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($post as $value) {
                  ?>
                  <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><img src="<?= $value->image ?>" width="50"></td>
                    <td><?= $value->insert_time ?></td>
                    <td><?= $value->view ?></td>
                    <td><?= $value->postypename ?></td>
                    <td><?= $value->username ?></td>
                    <?php
                        if($value->status == 0)
                          echo '<td>Waiting for moderation</td>';
                        elseif ($value->status == 1) {
                          echo '<td>Activated</td>';
                        }
                        else
                          echo '<td>Denied</td>';
                    ?>
                    <td class="center">
                      <a href="<?= url('/admin/post/view/'.$value->id); ?>" class="btn btn-success btn-mini"><i class="icon icon-eye-open"></i></a>
                      <a href="<?= url('/admin/post/edit/'.$value->id); ?>" class="btn btn-primary btn-mini"><i class="icon icon-pencil"></i></a>
                      <?php
                        if(isset($value->status))
                          if($value->status == 1 || $value->status == 2)
                        {
                      ?>
                          <a href="<?= url('/admin/post/deactivated/'.$value->id); ?>" class="btn btn-danger btn-mini ">X</a>
                      <?php
                        }
                        else
                        {
                      ?>
                          <a href="<?= url('/admin/post/activated/'.$value->id); ?>" class="btn btn-success btn-mini "><i class="icon icon-check"></i></a>
                          <a href="<?= url('/admin/post/denied/'.$value->id); ?>" class="btn btn-danger btn-mini "><i class="icon icon-ban-circle"></i></a>
                          <?php
                            }
                          }
                          ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection  
