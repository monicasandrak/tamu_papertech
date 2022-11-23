<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Data Tamu</title>
</head>
<body>
    <div class="text-center">
        <h5>Laporan Data Tamu</h5>
        <h6></h6>
    </div>
    <hr class="line-title">
        <p align="center">
            PT. Papertech Indonesia
        </p>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>No</th>
                                        <th>Tanggal</th>
                                        <th>ID Tamu</th>
                                        <th>Nama Tamu</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Keperluan</th>
                                        <th>Bertemu Dengan</th>
                                        <th>Nomor KTP/Identitas</th>
                                        <th>Foto KTP</th>
                                        <th>Nomor Kendaraan</th>
                                        <th>Jam Masuk</th>
                                        <th>Status</th>
                                        <th>Hasil Swab</th>
                </tr>
            </thead>
            <tbody>
            @if ($tamu ?? '')
            @php $no=1; @endphp
            @foreach ($tamu as $data)
            <tr>
            <td>{{$no++}}</td>
                                    <td>{{date('d F Y',strtotime($data->tanggal))}}</td>
                                    <td>{{$data->id_tamu}}</td>
                                    <td>{{$data->nama_tamu}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>{{$data->pekerjaan}}</td>
                                    <td>{{$data->keperluan}}</td>
                                    <td>{{$data->bertemu_dengan}}</td>
                                    <td>{{$data->no_ktp}}</td>
                                    <td><img src="{{url('foto_ktp/'.$data->foto_ktp)}}" width="100px">
                                    <td>{{$data->no_kendaraan}}</td>
                                    <td>{{$data->jam_masuk}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->hasil_swab}}</td>
            </tr> 
            @endforeach
            @else
            <tr>
                <td colspan="8"><center><b>data tidak ditemukan</b></center></td>
            </tr> 
            @endif
            </tbody>
        </table>
    </div>
</body>
</html>