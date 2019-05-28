@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" class="current">Message</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <form method="message" action="">
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
      <form method="message" action="">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-content ">
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
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Insert time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($message as $value) 
                  {
                  ?>
                  <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->insert_time ?></td>
                    <?php
                        if($value->status == 0)
                          echo '<td>Not seen</td>';
                        else
                          echo '<td>Seen</td>';
                    ?>
                    <td class="center">
                      <a href="<?= url('/admin/message/view/'.$value->id); ?>" class="btn btn-primary btn-mini"><i class="icon icon-eye-open"></i></a>
                      <?php
                          if($value->status == 1)
                        {
                      ?>
                          <a href="<?= url('/admin/message/deactivated/'.$value->id); ?>" class="btn btn-danger btn-mini "><i class="icon icon-ban-circle"></i></a>
                      <?php
                        }
                        else
                        {
                      ?>
                          <a href="<?= url('/admin/message/activated/'.$value->id); ?>" class="btn btn-success btn-mini "><i class="icon icon-check"></i></a>
                          <?php
                        }
                      echo '</td>';
                    echo '</tr>';  
                    }
                          ?>
                </tbody>
              </table>
              {{ $message->render("pagination::admin") }}
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection  
