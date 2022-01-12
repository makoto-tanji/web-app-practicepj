<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    //以下追加
    protected $fillable = [
        'id',
        'content',
        'created_at',
        'updated_at'
    ];

    public static $rules = array(
        'content' => 'required|max:20',
    );
}
