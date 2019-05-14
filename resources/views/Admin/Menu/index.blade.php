@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" class="current">Menu</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <form method="menu" action="">
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
                  <a href="<?= url('/admin/menu/add'); ?>" class="btn btn-success btn-mini">Add</a>
                </li>
              </ul>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($menu as $value) 
                  {
                  ?>
                  <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->link ?></td>
                    <td><?= $value->position ?></td>
                    <?php
                        if($value->status == 0)
                          echo '<td>Deactivated</td>';
                        else
                          echo '<td>Activated</td>';
                    ?>
                    <td class="center">
                      <a href="<?= url('/admin/menu/'.$value->id.'/submenu/'); ?>" class="btn btn-success btn-mini">Submenu</a>
                      <a href="<?= url('/admin/menu/edit/'.$value->id); ?>" class="btn btn-primary btn-mini"><i class="icon icon-pencil"></i></a>
                      <?php
                        if(isset($value->status))
                          if($value->status == 1)
                          {
                      ?>
                          <a href="<?= url('/admin/menu/deactivated/'.$value->id); ?>" class="btn btn-warning btn-mini "><i class="icon icon-ban-circle"></i></a>
                      <?php
                          }
                          else
                          {
                      ?>
                          <a href="<?= url('/admin/menu/activated/'.$value->id); ?>" class="btn btn-success btn-mini "><i class="icon icon-check"></i></a>
                      <?php
                          }
                          if($value->id != '19')
                          {
                      ?>
                          <a href="<?= url('/admin/menu/delete/'.$value->id); ?>" class="btn btn-danger btn-mini">X</i></a>  
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
