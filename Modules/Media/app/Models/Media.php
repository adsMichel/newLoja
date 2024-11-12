<?php

namespace Modules\Media\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'path',
    ];
}
