<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    
</head>

<body>
    <div class="mt-4">
        <h4><b>{{ $pasien }}</b></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>ID Pasien</th>
                <th>Nama Lengkap</th>
                <th>Departement</th>
                <th>Keluhan</th>
                <th>DIagnosa</th>
                <th>Obat</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                @foreach ($pasien as $row)
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->id_pasien ?></td>
                    <td><?= $row->nama_pasien ?></td>
                    <td><?= $row->departement ?></td>
                    <td><?= $row->keluhan ?></td>
                    <td><?= $row->diagnosa ?></td>
                    <td><?= $row->obat ?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
