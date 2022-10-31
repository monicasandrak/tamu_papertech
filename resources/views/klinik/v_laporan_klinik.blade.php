@section('title')
Laporan
@endsection
@extends('layout/v_template2')

@section('page')
Laporan
@endsection

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
<div class="col-lg-5 ml-4">
    <h3>Laporan Data Tamu</h3>
    <br>
    <form method="GET" action="/laporan/print_laporan_tamu"> 
        @csrf
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="dari_tanggal">Dari Tanggal</label>
                        <input type="date" name="dari_tanggal" class="form-control" id="dari_tanggal" value="<?= date('Y-m-01'); ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="sampai_tanggal">Sampai Tanggal</label>
                        <input type="date" name="sampai_tanggal" class="form-control" id="sampai_tanggal" value="<?= date('Y-m-d'); ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="laporan" class="btn btn-primary">Lihat Laporan</button>
        </div>
    </form>

    <script>
		$(document).ready(function() {
			function print() {
				window.print();
			}
		});
	</script>
    <br>
    <h3>Laporan Data Pegawai</h3>
    <br>

    <form method="GET" action="/laporan/print_laporan_pegawai"> 
        @csrf
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="dari_tanggal">Dari Tanggal</label>
                        <input type="date" name="dari_tanggal" class="form-control" id="dari_tanggal" value="<?= date('Y-m-01'); ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="sampai_tanggal">Sampai Tanggal</label>
                        <input type="date" name="sampai_tanggal" class="form-control" id="sampai_tanggal" value="<?= date('Y-m-d'); ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="laporan" class="btn btn-primary">Lihat Laporan</button>
        </div>
    </form>

    <script>
		$(document).ready(function() {
			function print() {
				window.print();
			}
		});
	</script>
        <br>
    <h3>Laporan Data Obat</h3>
    <br>

    <form method="GET" action="/laporan/print_laporan_obat"> 
        @csrf
        <div class="row">
            <div class="col-lg">
            </div>
            <div class="col-lg">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="laporan" class="btn btn-primary">Lihat Laporan</button>
        </div>
    </form>

    <script>
		$(document).ready(function() {
			function print() {
				window.print();
			}
		});
	</script>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection



