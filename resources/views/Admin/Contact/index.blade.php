@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" class="current">Contact</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <form method="contact" action="">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-content nopadding">
              <ul class="recent-users"> 
                <li>
                  <a href="<?= url('/admin/contact/edit/1'); ?>" class="btn btn-success btn-mini">Edit</a>
                </li>
              </ul>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th>Brand name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Facebook URL</th>
                    <th>Instagram URL</th>
                    <th>Youtube URL</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($contact as $value) 
                  {
                  ?>
                  <tr>
                    <td><?= $value->brand_name ?></td>
                    <td><?= $value->address ?></td>
                    <td><?= $value->phone ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->link_fb ?></td>
                    <td><?= $value->link_ins ?></td>
                    <td><?= $value->link_yt ?></td>
                  <?php     
                  }
                  ?>
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
