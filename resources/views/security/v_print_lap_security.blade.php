<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> 

    <title>Laporan Data Security</title>
</head>
<body>
    <div class="text-center">
        <h5>Laporan Data Security</h5>
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
                <th>ID Security</th>
                <th>Nama Security</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Bagian</th>
                <th>Foto Security</th>
                </tr>
            </thead>
            <tbody>
            
            @php $no=1; @endphp
            @foreach ($security as $data)
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->id_security}}</td>
            <td>{{$data->nama_security}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->jk}}</td>
            <td>{{$data->bagian}}</td>
            <td><img src="{{url('foto_security/'.$data->foto_security)}}" width="100px"></td>
            @endforeach
           
            
            
            </tbody>
        </table>
    </div>
</body>
</html>
<script>
      window.print()
  </script>
