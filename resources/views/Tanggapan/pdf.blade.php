<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style type="text/css">
        .judul{
            text-align: center;
            background: #F4F4F4;
            color: #000;
            padding: 2px;
            border-radius: 5px;
        }
        .center{
            text-align: center;
            padding: 2px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><body>
    <div>
        <div>
            <div class=" judul">
                <img style=" max-width: 100px; margin: 20px" src="{{public_path('img/logo.png')}}">
                <h1 style="font-size: 20px;">Selamat Datang di aplikasi pengaduan masyarakat <span style="color: #e07a5f"">Sukasari Bogor</span></h1>
            </div>
            <div class=" center mt-3">
                <div>
                    <span style=" font-size: 16px">Nama petugas: <span style="color: #e07a5f">{{ Auth::guard('petugas')->user()->nama_petugas }}</span></span>
                </div>
                <div class=" flex items-center">
                    <span style="font-size: 16px">Tanggal: <span style="color: #e07a5f">{{ now()->format('l, d / M / y  ') }}</span></span>
                </div>
                <div class=" flex items-center">
                    <span style="font-size: 16px">Waktu: <span style="color: #e07a5f">{{ now()->format('H:i:s a ') }}</span></span>
                </div>
            </div>
            <div class="mt-3">
                <table class=" table">
                    <thead style="background: #F4F4F4">
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Tanggal Pengaduan</td>
                            <td>Nik Pelapor</td>
                            <td>Isi Aduan</td>
                            <td>Isi Tanggapan</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanggapans as $item)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$item->getDataPengaduan->getDataMasyarakat->nama}}</td>
                            <td>{{$item->getDataPengaduan->tgl_pengaduan}}</td>
                            <td>{{$item->getDataPengaduan->nik}}</td>
                            <td>{{$item->getDataPengaduan->isi_laporan}}</td>
                            <td>{{$item->tanggapan}}</td>
                            <td>{{$item->getDataPengaduan->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
