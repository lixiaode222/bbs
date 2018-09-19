<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //允许批量注入的变量
    protected $fillable = [
        'name','description',
    ];
}
