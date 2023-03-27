@extends('layouts.MainD')

@section('title', 'Dashboard | Petugas')

@section('content')
    <section class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
        <div class=" bg-putih w-full rounded-xl h-full pt-6 pb-16 px-6">
            <div class=" flex justify-end">
                <a href={{route('routeP.create')}} class=" bg-keempat py-2 hover:bg-opacity-80 duration-300 ease-in-out flex items-center px-4 rounded-full text-xs text-putih gap-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                    <span>Tambah Petugas</span>
                </a>
            </div>
            <div class=" mt-11">
                <table class=" w-full flex flex-col gap-4">
                    <thead>
                        <tr class=" flex bg-kelima rounded-2xl px-10 py-3 text-xs font-bold">
                            <td class=" w-[17%]">No</td>
                            <td class=" w-[17%]">Nama petugas</td>
                            <td class=" w-[17%] translate-x-12">Username</td>
                            <td class=" w-[17%] translate-x-24">Level</td>
                            <td class=" w-[17%] translate-x-32">Telp</td>
                            <td class=" w-[17%] text-end">Action</td>
                        </tr>
                    </thead>
                    <tbody class=" flex flex-col gap-4 relative">
                        @foreach ($petugas as $item)
                            <tr class=" flex bg-putih border border-kelima rounded-lg px-10 py-4 text-[10px] items-center">
                                <td class=" w-[17%]">{{$loop->index + 1}}</td>
                                <td class=" w-[17%]">{{$item->nama_petugas}}</td>
                                <td class=" w-[17%] translate-x-12">{{$item->username}}</td>
                                <td class=" w-[17%] translate-x-24">{{$item->level}}</td>
                                <td class=" w-[17%] translate-x-32">{{$item->telp}}</td>
                                <td class=" w-[17%] justify-end flex">
                                    <div class=" cursor-pointer bg-kelima py-2 rounded-lg px-2 group/2 relative" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-ketiga duration-300 ease-in-out group-hover/2:text-utama">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                        <form action="{{route('routeP.destroy', ['id_petugas' =>$item->id])}}"> 
                                            <div class=" hidden absolute group-hover/2:flex z-10 rounded-md group-hover/2:bg-putih group-hover/2:drop-shadow-5xl top-full left-0 ">
                                                <div class=" flex flex-col items-start gap-3 py-3 px-4 w-full">
                                                    <a href="{{route('routeP.edit', ['id_petugas' =>$item->id])}}" class=" text-biru text-sm font-bold w-full hover:underline">Edit</a>
                                                    @csrf
                                                    @method('GET')
                                                    <button class=" text-merah text-sm font-bold w-full hover:underline">Hapus</button>
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
