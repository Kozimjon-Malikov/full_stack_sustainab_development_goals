<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','rasm_uz','rasm_ru','rasm_en'];
    public function page()
    {
        return $this->hasMany(Page::class);
    }
}
