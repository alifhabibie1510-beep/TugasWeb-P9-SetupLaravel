@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-extrabold">Tentang saya</h1>

    <dl class="mt-6 max-w-xl divide-y divide-slate-800 rounded-xl border border-slate-800 bg-slate-900">
        @foreach ($profil as $label => $nilai)
            <div class="flex justify-between gap-4 px-5 py-3">
                <dt class="text-slate-400">{{ $label }}</dt>
                <dd class="font-medium text-white">{{ $nilai }}</dd>
            </div>
        @endforeach
    </dl>

    <h2 class="mt-10 text-xl font-bold">Tools yang dipakai</h2>
    <ul class="mt-4 flex flex-wrap gap-2">
        @foreach ($tools as $tool)
            <li class="rounded-full bg-red-500/15 px-4 py-1.5 text-sm font-medium text-red-300">{{ $tool }}</li>
        @endforeach
    </ul>
@endsection