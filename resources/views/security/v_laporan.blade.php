@section('title')
Laporan Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Laporan Data Tamu
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FORM LAPORAN DATA TAMU
                            </h2>
                            <BR>
                            <div class="body">
                           
        
        
            <div class="col-lg">
                <div class="form-group">
                    <label for="label">Dari Tanggal</label>
                        <input type="date" name="dari_tanggal" class="form-control" id="dari_tanggal" value="<?= date('Y-m-01'); ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="label">Sampai Tanggal</label>
                        <input type="date" name="sampai_tanggal" class="form-control" id="sampai_tanggal" value="<?= date('Y-m-d'); ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href="" onclick ="this.href='/laporan-pertanggal/'+document.getElementById('dari_tanggal').value +
            '/' + document.getElementById('sampai_tanggal').value " target="_blank" class="btn btn-primary col-md-12"> Cetak Laporan Pertanggal <i class="fas fa-print"></i>
            </a>
        </div>
   
                  
    </section>
@endsection