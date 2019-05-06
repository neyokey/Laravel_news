@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" title="Đơn hàng" class="current"><?= $name; ?></a>
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
              </ul>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <?php
                        $count = 0;
                        foreach ($data as $value) {
                          foreach ($value as $key => $value1) {
                              echo '<th scope="col">'.$key.'</th>';
                              $count++;
                            }
                            break;
                        }
                    ?>
                    <th>Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $count = 0;
                      foreach ($data as $value) {
                        echo "<tr>";
                          foreach ($value as $key => $value1) {
                            echo "<td>".$value1."</td>";
                          }
                          ?>
                          <td class="center">
                            <a href="<?= url("/admin/".$name.'/add'); ?>" class="btn btn-warning btn-mini"><i class="icon icon-plus"></i></a>
                            <a href="<?= url("/admin/".$name.'/edit/'.$value->id); ?>" class="btn btn-primary btn-mini"><i class="icon icon-pencil"></i></a>
                            <?php
                              if(isset($value->status))
                                if($value->status == 1)
                              {
                            ?>
                                <a href="<?= url("/admin/".$name.'/deactivated/'.$value->id); ?>" class="btn btn-danger btn-mini "><i class="icon icon-ban-circle"></i></a>
                            <?php
                              }
                              else
                              {
                            ?>
                                <a href="<?= url("/admin/".$name.'/activated/'.$value->id); ?>" class="btn btn-success btn-mini "><i class="icon icon-check"></i></a>
                          </td>
                        <?php
                              }
                        echo "</tr>";
                      }
                  ?>
                  <tr>
                    <td></td>
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
