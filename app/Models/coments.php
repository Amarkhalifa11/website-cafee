<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coments extends Model
{
    use HasFactory;
    protected $fillable = [
        'coment_post_id',
        'name',
        'email',
        'date',
        'coment',
    ];
}
