<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Surat Tamu</title>
    <style type="text/css">
        /* @page {
            size : 8in 7.5in;
        } */

        #judul {
            text-align:center;
        }

        #halaman{
            width : auto;
            height: auto;
            position: absolute;
            border: 1.5px solid;
            padding-top: 30px;
            padding-left :30px;
            padding-right: 30px;
            padding-buttom :30px;
        
            .table{
                display:inline;
            }
            #ttd {
                margin-bottom: 20px;
            }

            

        }
    </style>
</head>
<body>
    
    <div id=halaman>
        <table>
            <tr>
                <td><center>
                    <font size="4"> PT. PAPERTECH INDONESIA </font><br>
                    <font size="2"> Jl. Raya Cipeundeuy Km. 1, Desa Cipeundeuy Kecamatan Cipeundeuy, Kabupaten Subang Jawa Barat -41272, Indonesia </font><br>
                    <font size="2"> Phone : +62-260 710-645, Fax : +62-260 710-644, E-mail : pti@id.papertech.com, Website : www.papetech.com  </font><br>

                </td>
            </tr>
           <tr>
            <td colspan="7"><hr></td>
           </tr>
    
        </table>
        <br>
        <table width="470">
            <center>
                <font size ="4"> SURAT TAMU</font>
            </center><BR>

        </table>

        <table width="350">
          
            <tr>
                <td>ID Tamu</td>
                <td>:</td>
                <td>{{$tamu->id_tamu}}</td>
            </tr>
            <tr>
                <td>Nama Tamu</td>
                <td>:</td>
                <td>{{$tamu->nama_tamu}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{$tamu->alamat}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{$tamu->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td>:</td>
                <td>{{$tamu->keperluan}}</td>
            </tr>
            <tr>
                <td>Bertemu Dengan</td>
                <td>:</td>
                <td>{{$tamu->bertemu_dengan}}</td>
            </tr>
            <tr>
                <td>Nomor KTP/Identitas</td>
                <td>:</td>
                <td>{{$tamu->no_ktp}}</td>
            </tr>
            <tr>
                <td>Nomor Kendaraan</td>
                <td>:</td>
                <td>{{$tamu->no_kendaraan}}</td>
            </tr>
            
            <tr>
                <td>Pemeriksa Tamu</td>
                <td>:</td>
                <td>{{$tamu->pemeriksa_tamu}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{$tamu->status}}</td>
            </tr>
            <tr>
                <td>Test Swab</td>
                <td>:</td>
                <td>{{$tamu->swab}}</td>
            </tr>
           

        </table>
        <br>

            

        <div align="right">
        Subang, {{$tamu->tanggal}} <br>
        Yang Bertanda Tangan,
        
        <br><br><br><br><br>
        <!-- <div style="width: 32%; text-align; right; float; right "> -->
        ({{$tamu->nama_tamu}})
        </div>
        <p style "color:red;">Note : Kalau sudah selesai, harap surat ini dikembalikan ke bagian keamanan* </p>
            <tr>
                <td>Jam Masuk</td>
                <td>:</td>
                <td>{{$tamu->jam_masuk}}</td>
            </tr>
            <br>
            <tr>
                <td>Jam Keluar</td>
                <td>:</td>
                <td>...............</td>
    
            </tr>
        <br><br>
        <tr>
            <td colspan="7"><hr></td>
        </tr>
        <br>

        <!-- <table width="500">
        <tr> -->
        <div style="width:0%;text-align:right;float:left">
        Yang dituju <br>
        
        
        <br><br><br><br><br>
         
            <!-- <style="width: 82%; text-align; right; float; left "> -->
        (....................)
        
         <td>    
    </div>                                                                                                    </td>
        

        <td>
        <div align="right">
        <div style="width: 80%; text-align; right; float; left">
                         Mengetahui,<br>
                         Security
        
        
        <br><br><br><br><br><br>
        
            <!-- <style="width: 82%; text-align; right; float; left "> -->
        
        ({{$tamu->pemeriksa_tamu}})
    </div>    
    </td>
    </td>
    <br><br><br><br><br><br><br><br><br>
    </style>
</body>
<script>
      window.print()
  </script>
</html>



