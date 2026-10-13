@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="mb-12">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-red-500">Tugas Rutin 9</p>
        <h1 class="text-4xl font-extrabold sm:text-5xl">{{ $judul }}</h1>
        <p class="mt-4 max-w-2xl text-slate-400">
            Project ini dibuat untuk memahami dasar Laravel: routing, view Blade,
            controller, model, dan koneksi ke database MySQL.
        </p>
        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ route('about') }}"
               class="rounded-lg bg-red-500 px-5 py-2.5 font-semibold text-white hover:bg-red-600">Tentang saya</a>
            <a href="{{ route('contact') }}"
               class="rounded-lg border border-slate-700 px-5 py-2.5 font-semibold hover:bg-slate-800">Hubungi saya</a>
            <a href="{{ route('hello', ['nama' => 'Alif']) }}"
               class="rounded-lg border border-slate-700 px-5 py-2.5 font-semibold hover:bg-slate-800">Coba /hello/Alif</a>
        </div>
    </section>

    <section>
        <h2 class="mb-4 text-2xl font-bold">Fitur utama Laravel</h2>
        <div class="grid gap-4 sm:grid-cols-2">
            @foreach ($fitur as $item)
                <article class="rounded-xl border border-slate-800 bg-slate-900 p-5">
                    <h3 class="font-semibold text-white">{{ $item['nama'] }}</h3>
                    <p class="mt-1 text-sm text-slate-400">{{ $item['deskripsi'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection