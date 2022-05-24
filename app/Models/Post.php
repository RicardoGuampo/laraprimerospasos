<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable  = ['field1','title','slug','content','category_id','description','posted','image'];    
    protected $table = 'posts';
    use HasFactory;

}
