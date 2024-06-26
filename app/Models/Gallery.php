<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery_photos';
    protected $fillable = [
        'display_order',
        'gallery_category_id',
        'file',
        'file_type',
        'status',
    ];
}
