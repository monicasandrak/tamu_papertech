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
        <h4><b>{{ $tamu }}</b></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>ID Tamu</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Keperluan</th>
                    <th>Bertemu Dengan</th>
                    <th>No KTP</th>
                    <th>Foto KTP</th>
                    <th>Nomor Kendaraan</th>
                    <th>Jam Masuk</th>
                    <th>Hasil Swab</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                @foreach ($tamu as $row)
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->id_tamu ?></td>
                    <td><?= $row->nama_tamu ?></td>
                    <td><?= $row->alamat ?></td>
                    <td><?= $row->pekerjaan ?></td>
                    <td><?= $row->keperluan ?></td>
                    <td><?= $row->bertemu_dengan ?></td>
                    <td><?= $row->no_ktp ?></td>
                    <td><?= $row->foto_ktp ?></td>
                    <td><?= $row->no_kendaraan ?></td>
                    <td><?= $row->jam_masuk ?></td>
                    <td><?= $row->hasil_swab ?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
