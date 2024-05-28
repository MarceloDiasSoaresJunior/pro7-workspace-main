<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WPPostMeta extends Model
{
    use HasFactory;
    protected $connection = 'wordpress';
    protected $table = 'wp_postmeta';
}
