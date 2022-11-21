@section('title')
Laporan Data User
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data User
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
            <script src={{asset('air-datepicker/dist/js/datepicker.min.js') }}></script>
    </section>
@endsection