@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" class="current">User</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <form method="user" action="">
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
      <form method="user" action="">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-content nopadding">
              <ul class="recent-users"> 
                <li>
                  @if($errors->has('error'))
                  <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      {{$errors->first('error')}}
                  </div>
                  @endif
                  @if($errors->has('success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      {{$errors->first('success')}}
                  </div>
                  @endif
                  <a href="<?= url('/admin/user/add'); ?>" class="btn btn-success btn-mini">ADD</a>
                </li>
              </ul>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($user as $value) 
                  {
                  ?>
                  <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->email ?></td>
                    <td><image width='50px' height='50px' src='<?= url($value->image) ?>'></image></td>
                    <td><?= $value->typename ?></td>
                    <?php
                        if($value->status == 0)
                          echo '<td>Deactivated</td>';
                        else
                          echo '<td>Activated</td>';
                    ?>
                    <td class="center">
                      <a href="<?= url('/admin/user/edit/'.$value->id); ?>" class="btn btn-primary btn-mini"><i class="icon icon-pencil"></i></a>
                      <?php
                          if($value->status == 1)
                        {
                      ?>
                          <a href="<?= url('/admin/user/deactivated/'.$value->id); ?>" class="btn btn-danger btn-mini "><i class="icon icon-ban-circle"></i></a>
                      <?php
                        }
                        else
                        {
                      ?>
                          <a href="<?= url('/admin/user/activated/'.$value->id); ?>" class="btn btn-success btn-mini "><i class="icon icon-check"></i></a>
                          <?php
                        }
                      echo '</td>';
                    echo '</tr>';  
                    }
                          ?>
                </tbody>
              </table>
              {{ $user->render("pagination::admin") }}
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection  
