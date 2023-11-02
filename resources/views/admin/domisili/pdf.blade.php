<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kop Surat</title>
    <style>
     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        #logo {
            width: 100px; /* Sesuaikan dengan lebar logo */
            height: auto;
            margin-top: 50px;
            position: absolute;
        }

        #instansi-info {
            text-align: center;
         
        }

        #instansi-info h1, #instansi-info p {
    
           
        }

        .tr {
            text-align: justify;
        }
        .th {
            text-align: ;
        }

        .table {
            margin: 0 auto; /* Mengatur agar tabel berada di tengah */
        }

        .footer {
            margin-top: 120px;
            text-align: right;
            
        }
        .signature {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        .left {
            width: 50%; /* Memberikan lebar 50% pada setiap td */
            padding: 10px;
        }
        .right {
            width: 50%; /* Memberikan lebar 50% pada setiap td */
            padding: 10px;
        }
    </style>
</head>
<body>
<div id="header">
    <table class="header">
        <tr>
            <td><img height="100" width="100" src="https://i.pinimg.com/originals/94/b9/de/94b9de90bc780ed1998966f83d2ca7fe.png" alt="Logo Instansi"></td>
            <td>
                <center>
                    <font size="4">PEMERINTAH KABUPATEN KEDIRI</font><br>
                    <font size="4">KECAMATAN SEMEN</font><br>
                    <font size="4">KEPALA DESA BOBANG</font><br>
                    <font size="2">Jl. Keramat Desa Bobang Kec. Semen Kode Pos 64161 - Email : desabobang2007@gmail.com</font><br>
                </center>

            </td>
        </tr>
      </table>
    <hr>
    <h3 style="text-align: center;">SURAT KETERANGAN DOMISILI</h3>
    <p style="text-align: center;">Nomor : {{$domisili->pengajuan->kode_surat}}</p>
    

    <div class="content">
        <p>Yang  bertanda tangan di bawah ini  kami  Kepala Desa  Bobang  Kecamatan Semen Kabupaten Kediri : </p>

        <table class="table text-left">
            <tbody>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $biodata->user->NIK }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $biodata->user->name }}</td>
            </tr>
            @isset($biodata)
                <tr>
                    <td>Tempat/Tgl.Lahir</td>
                    <td>:</td>
                    <td>{{ $biodata->tempat_lahir }}, {{ $biodata->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $biodata->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Kebangsaan</td>
                    <td>:</td>
                    <td>{{ $biodata->Kebangsaan }}</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td>{{ $biodata->status_perkawinan }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>{{ $biodata->pendidikan }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $biodata->alamat }}</td>
                </tr>

            </tbody>
        </table>
        @else
            <p>Biodata belum diisi.</p>
        @endisset

        <p>menerangkan bahwa yang bersangkutan sampai pada saat surat keterangan ini dibuat berdomisili di :{{ $domisili->domisili }} Surat Keterangan ini digunakan untuk : {{ $domisili->tujuan }}</p>
    <p>Demikian Surat Keterangan Domisili  ini  kami buat,  untuk di pergunakan sebagaiamana mestinya.</p>
    </div>    
    <table class="signature">
        <tr>
          <td class="left">
            <p style="margin-top: 60px">Yang bersangkutan,</p> 
            <p style="margin-top: 80px">{{ $biodata->user->name }} </p>
            </center>
          </td>
          <td class="right">
            <p>{{ \Carbon\Carbon::now()->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</p> 
            <p>KEPALA DESA</p>
            <p style="margin-top: 80px">Y A T I R AN </p>
          </td>
        </tr>
      </table>
 

</div>

<!-- Isi surat atau konten lainnya -->

</body>
</html>



