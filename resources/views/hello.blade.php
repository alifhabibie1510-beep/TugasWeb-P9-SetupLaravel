@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1 class="text-4xl font-extrabold">Halo, <span class="text-red-500">{{ $nama }}</span>!</h1>
    <p class="mt-3 text-slate-400">
        Nama ini diambil dari parameter di URL. Coba ganti nama di address bar,
        misalnya <code class="rounded bg-slate-800 px-2 py-0.5">/hello/Budi</code>.
    </p>
@endsection