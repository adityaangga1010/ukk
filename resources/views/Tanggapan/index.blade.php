@extends('layouts.MainD')

@section('title', 'Dashboard | Tanggapan')

@section('content')
<section class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
    <div class=" bg-putih w-full rounded-xl h-full pt-6 pb-16 px-6">
        <div class=" flex justify-end">
            <a href={{route('generate.pdf')}} class=" bg-merah py-2 hover:bg-opacity-80 duration-300 ease-in-out flex items-center px-4 rounded-full text-xs text-putih gap-1 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>
                <span>Generate Laporan</span>
            </a>
        </div>
        <div class=" mt-11">
            <table class=" w-full flex flex-col gap-4">
                <thead>
                    <tr class=" flex bg-kelima rounded-2xl px-10 py-3 text-xs font-bold">
                        <td class=" w-[17%]">No</td>
                        <td class=" w-[17%]">Tanggal Tanggapan</td>
                        <td class=" w-[17%] translate-x-12">Id Pengaduan</td>
                        <td class=" w-[17%] translate-x-24">Nama Petugas</td>
                        <td class=" w-[17%] translate-x-32">Tanggapan</td>
                        <td class=" w-[17%] translate-x-32">Status</td>
                        <td class=" w-[17%] text-end">Action</td>
                    </tr>
                </thead>
                <tbody class=" flex flex-col gap-4 relative">
                    @foreach ($tanggapan as $item)
                        <tr class=" flex bg-putih border border-kelima rounded-lg px-10 py-4 text-[10px] items-center">
                            <td class=" w-[17%]">{{$loop->index + 1}}</td>
                            <td class=" w-[17%]">{{$item->tgl_tanggapan}}</td>
                            <td class=" w-[17%] translate-x-12">{{$item->id_pengaduan}}</td>
                            <td class=" w-[17%] translate-x-24">{{$item->getDataPetugas->nama_petugas}}</td>
                            <td class=" w-[17%] translate-x-32">{{$item->tanggapan}}</td>
                            <td class=" w-[17%] translate-x-32">
                                @if ($item->getDataPengaduan->status == '0')
                                    <a class=" font-bold italic text-merah">Pending</a>
                                @elseif($item->getDataPengaduan->status == 'proses')
                                    <a class=" font-bold italic text-biru">Proses</a>
                                @else
                                    <a class=" font-bold italic text-keempat">Selesai</a>
                                @endif
                            </td>
                            <td class=" w-[17%] justify-end flex">
                                <div class=" cursor-pointer bg-kelima py-2 rounded-lg px-2 group/2 relative" >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-ketiga duration-300 ease-in-out group-hover/2:text-utama">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                    <form action="{{route('routeT.destroy', ['id_pengaduan' =>$item->id])}}">
                                        <div class=" hidden absolute group-hover/2:flex z-10 rounded-md group-hover/2:bg-putih group-hover/2:drop-shadow-5xl top-full left-0 ">
                                            <div class=" flex flex-col items-start gap-3 py-3 px-4 w-full">
                                                @csrf
                                                @method('GET')
                                                <button class=" text-merah text-sm font-bold w-full hover:underline">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
