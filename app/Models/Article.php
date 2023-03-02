<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    public function user(){
    return $this->belongsTo(User::class);  
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'user_id',
        'category_id'
        
    ];
}
