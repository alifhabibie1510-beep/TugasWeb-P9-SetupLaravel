<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    // Menampilkan halaman form kontak
    public function create(): View
    {
        return view('contact', [
            'totalPesan' => Message::count(),
        ]);
    }

    // Memvalidasi input lalu menyimpannya ke database
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'name'  => ['required', 'string', 'min:3', 'max:100'],
                'email' => ['required', 'email', 'max:150'],
                'body'  => ['required', 'string', 'min:10', 'max:1000'],
            ],
            [
                'required' => ':attribute wajib diisi.',
                'min'      => ':attribute minimal :min karakter.',
                'max'      => ':attribute maksimal :max karakter.',
                'email'    => 'Format email tidak valid.',
            ],
            [
                'name'  => 'Nama',
                'email' => 'Email',
                'body'  => 'Pesan',
            ]
        );

        Message::create($validated);

           return Redirect::route('contact')
       ->with('success', 'Terima kasih! Pesanmu sudah tersimpan.');
    }
}