<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    //Model이 migration에 만들어진 어떤 table을 사용할것인가를 정의
    protected $fillable = ['name', 'title', 'contents'];
}
