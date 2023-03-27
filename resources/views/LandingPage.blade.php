@extends('layouts.MainLR')

@section('title', 'LandingPage | Pengaduan')

@section('content')
    <div class=" min-h-screen ">
        {!! Toastr::message() !!}
        <nav class=" mx-auto">
            <div class=" px-14 py-3 bg-utama">
                <div class=" flex justify-between">
                    <div class=" flex items-center gap-2">
                        <img class=" w-32 h-w-32" src="{{asset('img/logo1.svg')}}">
                    </div>
                    <div class=" flex items-center gap-4">
                        <a href="{{route('route.login')}}" class=" hover:text-orange text-putih text-sm">Masuk</a>
                        <a href="{{route('route.register')}}" class=" bg-putih text-utama px-4 rounded-md text-sm font-bold py-1 hover:bg-orange hover:text-putih">
                            <h1>Daftar</h1>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <main class=" mx-auto pt-24">
            <div class=" flex justify-between">
                <div class=" max-w-[550px] pl-14 flex flex-col gap-4">
                    <h1 class=" text-4xl font-bold tracking-wide leading-normal">Selamat Datang Di Aplikasi Pengaduan Masyarakat <span class=" text-orange">Sukasari</span></h1>
                    <span>Ayo berikan keluhan kalian, Agar bisa cepat di tanggani oleh petugas kami !!!</span>
                    <div class=" pt-4">
                        <span class=" bg-utama text-putih px-6 py-3 text-sm rounded-full">Total Pengaduan : <span class=" text-merah">{{$totalAduan}}</span></span>
                    </div>
                </div>
                <div class=" -translate-y-10 -translate-x-6">
                    <img class=" w-full h-96" src="{{asset('img/Landing.svg')}}">
                </div>
            </div>
            <div class=" px-14 mt-24 bg-kelima rounded-lg pt-5 py-20">
                <div class=" flex flex-col mb-4">
                    <span class=" tracking-[2px] text-center class font-medium text-ketiga">DATA PENGADU</span>
                </div>
                <div class=" grid grid-cols-3 gap-10">
                    <div class=" flex flex-col ">
                        <div class=" border border-kedua rounded-lg gap-5 flex flex-col w-full h-full">
                            <div class=" pl-9 flex gap-2 py-3 bg-utama rounded-t-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class=" text-putih">Pengaduan <span class=" text-merah">Belum Ditanggapi</span></h1>
                            </div>
                            @foreach ($PengaduanPending as $item)
                            <div class=" flex flex-col gap-4 px-9 w-full mb-4">
                                <div class=" border rounded-lg border-kedua">
                                    <div class=" w-full h-full border-b-kedua">
                                        <img class=" border-b border-kedua rounded-t-lg w-full h-36" src="{{asset('img/'.$item->image)}}" alt="">
                                        <div class=" flex flex-col gap-2 px-2 py-2">
                                            <div class=" flex justify-center">
                                                <span class=" bg-merah px-3 py-1 rounded-full text-xs text-putih">Pending</span>
                                            </div>
                                            <h1>Nama Pengaduan : {{$item->getDataMasyarakat->nama}}</h1>
                                            <h1 class=" text-kedua">Isi Laporan : {{$item->isi_laporan}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class=" flex flex-col ">
                        <div class=" border border-kedua rounded-lg gap-5 flex flex-col w-full h-full">
                            <div class=" pl-9 flex gap-2 py-3 bg-utama rounded-t-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                </svg>
                                <h1 class=" text-putih">Pengaduan <span class=" text-kuning">Diproses</span></h1>
                            </div>
                            @foreach ($PengaduanProses as $item)
                            <div class=" flex flex-col gap-4 px-9 w-full mb-4">
                                <div class=" border rounded-lg border-kedua">
                                    <div class=" w-full h-full border-b-kedua">
                                        <img class=" border-b border-kedua rounded-t-lg w-full h-36" src="{{asset('img/'.$item->image)}}" alt="">
                                        <div class=" flex flex-col gap-2 px-2 py-2">
                                            <div class=" flex justify-center">
                                                <span class=" bg-kuning px-3 py-1 rounded-full text-xs text-putih">Proses</span>
                                            </div>
                                            <h1>Nama Pengaduan : {{$item->getDataMasyarakat->nama}}</h1>
                                            <h1 class=" text-kedua">Tanggal Pengaduan : {{$item->tgl_pengaduan}}</h1>
                                            <h1 class=" text-kedua">Tanggal Proses : {{$item->getDataTanggapan->tgl_tanggapan}}</h1>
                                            <h1 class=" text-kedua">Isi Laporan : {{$item->isi_laporan}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class=" flex flex-col ">
                        <div class=" border border-kedua rounded-lg gap-5 flex flex-col w-full h-full">
                            <div class=" pl-9 flex gap-2 py-3 bg-utama rounded-t-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class=" text-putih">Pengaduan <span class=" text-keempat">Selesai</span></h1>
                            </div>
                            @foreach ($PengaduanSelesai as $item)
                            <div class=" flex flex-col gap-4 px-9 w-full mb-4">
                                <div class=" border rounded-lg border-kedua">
                                    <div class=" w-full h-full border-b-kedua">
                                        <img class=" border-b border-kedua rounded-t-lg w-full h-36" src="{{asset('img/'.$item->image)}}" alt="">
                                        <div class=" flex flex-col gap-2 px-2 py-2">
                                            <div class=" flex justify-center">
                                                <span class=" bg-keempat px-3 py-1 rounded-full text-xs text-putih">Selesai</span>
                                            </div>
                                            <h1>Nama Pengaduan : {{$item->getDataMasyarakat->nama}}</h1>
                                            <h1 class=" text-kedua">Tanggal Pengaduan : {{$item->tgl_pengaduan}}</h1>
                                            <h1 class=" text-kedua">Tanggal Selesai : {{$item->getDataTanggapan->tgl_tanggapan}}</h1>
                                            <h1 class=" text-kedua">Isi Laporan : {{$item->isi_laporan}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class=" bg-utama flex justify-center items-center py-9">
            <h1 class=" text-putih">&copy; Copyright 2023 <span class=" text-orange">Pengaduan-Sukasari-Bogor </span>Allright Reserved.</h1>
        </footer>
    </div>
@endsection
