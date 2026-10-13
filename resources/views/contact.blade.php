@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-extrabold">Hubungi saya</h1>
    <p class="mt-2 text-slate-400">
        Pesan yang masuk disimpan di database MySQL.
        Total pesan saat ini: <strong class="text-white">{{ $totalPesan }}</strong>.
    </p>

    @if (session('success'))
        <div role="status" class="mt-6 rounded-lg border border-green-700 bg-green-950 px-4 py-3 text-green-300">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="mt-6 max-w-xl space-y-5" novalidate>
        @csrf

        <div>
            <label for="name" class="mb-1 block text-sm font-medium">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
                   class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2.5 focus:border-red-500 focus:outline-none">
            @error('name')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="mb-1 block text-sm font-medium">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                   class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2.5 focus:border-red-500 focus:outline-none">
            @error('email')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="body" class="mb-1 block text-sm font-medium">Pesan</label>
            <textarea id="body" name="body" rows="5"
                      class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2.5 focus:border-red-500 focus:outline-none">{{ old('body') }}</textarea>
            @error('body')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="rounded-lg bg-red-500 px-5 py-2.5 font-semibold text-white hover:bg-red-600">
            Kirim pesan
        </button>
    </form>
@endsection