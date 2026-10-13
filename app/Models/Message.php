<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Hanya kolom ini yang boleh diisi massal (perlindungan mass assignment)
    protected $fillable = ['name', 'email', 'body'];
}