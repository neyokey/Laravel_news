@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="" class="current">Usertype</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <form method="usertype" action="">
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
                  <a href="<?= url('/admin/usertype/add'); ?>" class="btn btn-success btn-mini">ADD</a>
                </li>
              </ul>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($usertype as $value) 
                  {
                  ?>
                  <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <?php
                        if($value->status == 0)
                          echo '<td>Deactivated</td>';
                        else
                          echo '<td>Activated</td>';
                    ?>
                    <td class="center">
                      <a href="<?= url('/admin/usertype/edit/'.$value->id); ?>" class="btn btn-primary btn-mini"><i class="icon icon-pencil"></i></a>
                      <?php
                          if($value->status == 1)
                        {
                      ?>
                          <a href="<?= url('/admin/usertype/deactivated/'.$value->id); ?>" class="btn btn-danger btn-mini "><i class="icon icon-ban-circle"></i></a>
                      <?php
                        }
                        else
                        {
                      ?>
                          <a href="<?= url('/admin/usertype/activated/'.$value->id); ?>" class="btn btn-success btn-mini "><i class="icon icon-check"></i></a>
                          <?php
                        }
                      echo '</td>';
                    echo '</tr>';  
                    }
                          ?>
                </tbody>
              </table>
              {{ $usertype->render("pagination::admin") }}
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection  
