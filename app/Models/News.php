<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'rasm_uz',
        'rasm_ru',
        'rasm_en',
        'editor_uz',
        'editor_ru',
        'editor_en',
    ];
}
