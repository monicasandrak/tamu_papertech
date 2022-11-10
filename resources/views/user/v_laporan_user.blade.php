@section('title')
Kelola User
@endsection
@extends('layout/v_template3')
@section('page')
Kelola User
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN DATA USER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1;?>
                                    @foreach ($user as $data)  
                                    <tr>
                                      <td>{{$no++}}</td>
                                      <td>{{$data->id}}</td>
                                      <td>{{$data->username}}</td>
                                      <td>{{$data->level}}</td>
                                      
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
@endsection